<?php
include 'dbconfig.php';
getFile();
$tablename = createDatabase($tablename);
$doExtract = extractText($tablename);
header("location: Analysis.php?table=$tablename");

function getFile() {
    if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 2000000)) {
        if ($_FILES["file"]["error"] > 0) {
            die("Return Code: " . $_FILES["file"]["error"] . "<br />");
        } else {
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
               // echo "File already exists.";
           } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
            }
        }
    } else {
        echo "Invalid file";
        die();
    }
}

function extractText($tablename) {
    $open = 'upload/' . $_FILES["file"]["name"];
    $content = shell_exec('software\pdftotext -raw ' . $open . ' upload/temp.txt');
    $pos = 1;
    $z = 0;
    $outFile = 'upload/temp.txt';
    $fh = fopen($outFile, 'r') or die('can\'t open file');
    doCoding($fh, $tablename);
    fclose($fh);
    unlink($outFile);
    unlink($open);
    mysql_close();
}

function getFourth($pos, $fh, $fourth, $meLastString) {
    //echo $meLastString;
    $meLast = array();
    $test = fgets($fh);
    $testseparate = explode(" ", $test);
    if (count($testseparate) == 1 && ((preg_match('/[0-9]+/', $testseparate[0])) || ((preg_match('/[a-z][0-9]+/i', $testseparate[0]))))) {
        $pos = ftell($fh);
        $z = count($fourth);
        $fourth[$z] = $testseparate[0];
        getFourth($pos, $fh, $fourth, $meLastString);
       // echo $meLastString;
    } else {
        fseek($fh, $pos);
        if (!(is_null($fourth))) {
            if (count($meLast) <= count($fourth)) {
                for ($i = 0; $i < count($fourth); $i++) {
                    $meLast[$i] = $fourth[$i];
                    $meLastString = implode(" ", $meLast);
                }
            }
        }
    }
}

function doCoding($fh, $tablename) {
    while (!feof($fh)) {
        $oneLine = fgets($fh);
        if ((preg_match('/\bCandidates\b/i', $oneLine)) || (preg_match('/\bbhopal\b/i', $oneLine)) || (preg_match('/\bGandhi\b/i', $oneLine))
                || (preg_match('/\bUniversity\b/i', $oneLine)) || (preg_match('/\bCollege\b/i', $oneLine)) || (preg_match('/\bB.E\b/i', $oneLine))
                || (preg_match('/\bExamination\b/i', $oneLine)) || (preg_match('/\bnotification\b/i', $oneLine)) || (preg_match('/\bdeclared\b/i', $oneLine))
                || (preg_match('/\bEXAM\b/i', $oneLine)) || (preg_match('/\b0205\b/i', $oneLine)) || (preg_match('/\bEnrollment\b/i', $oneLine))) {
            $oneLine = null;
        } else {
            if ((preg_match('/[a-zA-Z1-9]/', $oneLine))) {
                $j = 0;
                $first = $oneLine;
                $oneLine = fgets($fh);
                $separate = explode(" ", $oneLine);
                $s_no = $separate[0];
                $second = $separate[1];
                $marks = explode("/", $separate[2]);
                $third = $marks[0];
                $dummy = str_split($separate[3], 4);
                $final = $dummy[0];

                $pos = ftell($fh);
                $meLastString = null;
                getFourth($pos, $fh, null, $meLastString);
                if ($s_no == 1) {
                    $branch = "";
                    $subYear = str_split($second, 2);
                    $partYear[0] = "20";
                    $partYear[1] = $subYear[3];
                    $year = implode("", $partYear);
                    $branch = checkBranch($year, $second, $branch);
                }
                //  echo $s_no." ".$first." ".$second." ".$third." ".$final." ".$branch."</br>";
                entertoDB($second, $third, $final, $branch, $tablename);
            }
            else
                $oneLine=null;
        }
    }
}

function checkBranch($year, $second, $branch) {
    /* @var $year type */
    $sql = "select * from exam_cell.$year where enroll_no = '$second'";
    $result = mysql_query($sql);
    $rows = mysql_fetch_array($result) or die('Error: ' . mysql_error());
    $branch = $rows['branch'];
    return $branch;
}

function createDatabase() {
    $getvar[0] = $_POST["year"];
    $getvar[1] = $_POST["semester"];
    $getvar[2] = $_POST["txtSession"];
    $getvar[3] = $_POST["combo"];
    $tablename = implode("_", $getvar);
    $sql1 = "CREATE TABLE exam_cell.$tablename
(
enroll_no varchar(13) NOT NULL,
branch varchar(45),
marks int,
result varchar(5),  
primary key(enroll_no)
)";
// Execute query
    mysql_query($sql1) or die('Error: ' . mysql_error());
    return $tablename;
}

function entertoDB($second, $third, $final, $branch, $tablename) {

    $sql2 = "insert into exam_cell.$tablename values ('$second','$branch','$third','$final')";
    mysql_query($sql2) or die('Error: ' . mysql_error());
}

?>
