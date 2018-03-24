<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
include 'dbconfig.php';
getFile();
$tablename = createDatabase($tablename);
$doExtract = extractText($tablename);
header("location: Analysis.php?table=$tablename");

function getFile() {
    if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 20000000)) {
        if ($_FILES["file"]["error"] > 0) {
            die("Return Code: " . $_FILES["file"]["error"] . "<br />");
        } else {
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                
                //echo "File already exists.";
                
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
    $content = shell_exec('software\pdftotext ' . $open . ' upload/temp.txt');
    $outFile = 'upload/temp.txt';
    $fileWrite = 'upload/written.txt';
    $fh = fopen($outFile, 'r') or die('can\'t open file');
    $fw = fopen($fileWrite, 'a') or die('can\'t open file');
    doCoding($fh, $fw, $tablename);
    dbEntry($tablename);
    fclose($fh);
    fclose($fw);
    unlink($outFile);
    unlink($open);
    unlink($fileWrite);
    mysql_close();
}


function doCoding($fh, $fw, $tablename) {
    while (!feof($fh)) {
        $oneLine = fgets($fh);
          if ((preg_match('/[a-zA-Z]/', $oneLine)) || (preg_match('/[:|-|[|\]]/', $oneLine)) || (preg_match('/[0-9]/', $oneLine)))
        {    
            if((preg_match('/[0-9]{4}[a-zA-Z]{2,3}[0-9]+/', $oneLine))||(preg_match('/[0-9]{1,2}[.][0-9]+/', $oneLine))){
             fwrite($fw, $oneLine);
            }
            $oneLine = null;
        } else {
            //echo $oneLine."<br>";
        }
    }
}

function dbEntry($tablename){
    $fileRead = 'upload/written.txt';
    $file = fopen($fileRead, 'r') or die('can\'t open file');
     while (!feof($file)) {
         $line = fgets($file);
         $separate = explode(" ", $line);
         $first = $separate[0];
         $line = fgets($file);
         $other = explode(" ", $line);
         $second = $other[0];
         $dummy = str_split($other[1], 4);
         $third = $dummy[0];
         $branch = null;
         $subYear = str_split($first, 2);
         $partYear[0] = "20";
         $partYear[1] = $subYear[3];
         $year = implode("", $partYear);
         if((preg_match('/[0-9]{4}/', $year)))
         {
             $branch = checkBranch($year, $first, $branch);
             entertoDB($first, $second, $third, $branch, $tablename);
         }
     }
    
}

function checkBranch($year, $first, $branch) {
    /* @var $year type */
    $sql = "select * from exam_cell.$year where enroll_no = '$first'";
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
marks double,
result varchar(5),  
primary key(enroll_no)
)";
// Execute query
    mysql_query($sql1) or die('Error: ' . mysql_error());
    return $tablename;
}

function entertoDB($first, $second, $third, $branch, $tablename) {

    $sql2 = "insert into exam_cell.$tablename values ('$first','$branch',$second,'$third')";
    mysql_query($sql2) or die('Error: ' . mysql_error());
}

?>
