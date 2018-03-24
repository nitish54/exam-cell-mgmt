<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
$year = $_POST['txtYear'];
$exclude = $_POST['txtExclude'];
$capacity = $_POST['txtCapacity'];
$room = $_POST['txtRoom'];
$enroll = $_POST['txtEnrol'];
$arrenroll = explode(",", $enroll);
$arrroom = explode(",", $room);
if ($exclude != "")
    $arrexclude = explode(",", $exclude);
$k = 0;
for ($i = 0; $i <= count($arrroom); $i++)
    for ($j = $i + 1; $j <= count($arrroom); $j++) {
        if ($arrroom[$i] == $arrroom[$j])
            $troom = 1;
    }
if ($arrexclude != null) {
    for ($i = 0; $i <= count($arrexclude); $i++)
        for ($j = $i + 1; $j <= count($arrexclude); $j++) {
            if ($arrexclude[$i] == $arrexclude[$j])
                $texclude = 1;
        }
}
if ($arrexclude != null) {
    for ($i = 0; $i <= count($arrexclude); $i++) {
        for ($j = 0; $j < count($arrenroll); $j++) {
            if ($arrexclude[$i] == $arrenroll[$j])
                $tmatch[$k] = 1;
        }
        $k++;
    }
    for ($i = 0; $i <= count($arrexclude); $i++) {
        if ($tmatch[$i] != 1)
            $temp = 1;
    }
}
if ($troom == 1)
    header('location: seatForm.php?msg=Don\'t Repeat same room nos.');
else if ($texclude == 1)
    header('location: seatForm.php?msg=Don\'t Repeat same Enrollment nos.');
else if ($temp == 1)
    header('location: seatForm.php?msg=Enrollment no. not found.');
else
    doWork($arrroom, $arrenroll, $arrexclude, $capacity, $year);

function doWork($arrroom, $arrenroll, $arrexclude, $capacity, $year) {
    if ((count($arrroom) * $capacity) >= (count($arrenroll) - count($arrexclude))) {
        static $total = array();
        //$grossenroll = enrollno($capacity, $arrenroll, $arrexclude, $grossenroll, $total);
        static $k = 0, $p = 0, $n = 1, $m = 0;
        if ($arrexclude != null) {
            for ($t = 0; $t < count($arrexclude); $t++) {
                for ($j = 0; $j < count($arrenroll); $j++) {
                    if ($arrexclude[$t] == $arrenroll[$j])
                        unset($arrenroll[$j]);
                }
            }
        }
        array_unshift($arrenroll, array_shift($arrenroll));

        for ($i = 0; $i < count($arrenroll); $i+=$capacity) {
            $start = $arrenroll[$i];
            $b = 0;
            $c = 0;
            if ((count($arrenroll) - $k) >= $capacity) {
                $end = $arrenroll[$k + $capacity - 1];
                $k = $n * $capacity;
                $n++;
                $total[$m++] = $capacity;
                include 'dbconfig.php';
                $check = 0;
                $check1 = 0;
                for ($a = $i; $a < $k; $a++) {
                    $sql = "Select * from exam_cell.$year where enroll_no = '$arrenroll[$a]'";
                    $res = mysql_query($sql);
                    $row = mysql_fetch_array($res);
                    $branch[$check++] = $row['branch'];
                    $enrl[$check1++] = $row['enroll_no'];
                }
                for ($l = 0; $l < count($branch); $l++) {
                    if ($branch[$l] != $branch[0]) {
                        $finallist[$b++] = $enrl[$l - 1];
                        $next[$c++] = $enrl[$l];
                        $branch[0] = $branch[$l];
                    }
                }
            } else {
                $end = $arrenroll[count($arrenroll) - 2];
                $total[$m++] = (count($arrenroll) - $k - 1);
            }
            if (count($finallist) == 0)
                $grossenroll[$p++] = $start . " to " . $end;
            else if (count($finallist) == 1) {
                $grossenroll[$p++] = $start . " to " . $finallist[0] . " And " . $next[0] . " to " . $end;
                unset($finallist);
                unset($next);
            } else if (count($finallist) == 2) {
                $grossenroll[$p++] = $start . " to " . $finallist[0] . " And " . $next[0] . " to " . $finallist[1] . " And " . $next[1] . " to " . $end;
                unset($finallist);
                unset($next);
            }
            else
                $grossenroll[$p++] = "Over" . count($finallist);
        }

        require('fpdf/fpdf.php');

        class PDF extends FPDF {

            function Header() {
                // Logo
                $this->Image('images/blacklogo.jpg', 10, 6, 30);
                // Select Arial bold 15
                $this->SetFont('Arial', 'B', 36);
                $this->Ln(7);
                // Move to the right
                $this->Cell(90);
                // Framed title
                $this->Cell(30, 10, 'Seating Arrangement', 0, 0, 'C');
                // Line break
                $this->Ln(20);
            }

            // Page footer
            function Footer() {
                // Position at 1.5 cm from bottom
                $this->SetY(-15);
                // Arial italic 8
                $this->SetFont('Arial', 'I', 8);
                // Page number
                $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
                $this->SetY(-25);
                $this->SetFont('Arial', 'I', 20);
                $this->Cell(140);
                // Framed title
                $this->Cell(30, 10, 'Principal\'s Signature', 0, 0, 'C');
            }

        }
        $subYear = str_split($year, 2);
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->Cell(90);
        $pdf->SetFont('Arial', 'B', 20);

        $pdf->Cell(30, 10, 'For Session : ' . $year . " - ". ($subYear[1]+1), 0, 0, 'C');

        $pdf->Ln(20);
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Cell(20, 20, 'S.No', 1, 0, 'C');
        $pdf->Cell(40, 20, 'Room No.', 1, 0, 'C');
        $pdf->Cell(25, 20, 'Total', 1, 0, 'C');
        $pdf->Cell(0, 20, 'Enrollment Nos.', 1, 0, 'C');

        $pdf->Ln(20);
        $pdf->SetFont('Times', '', 16);
        for ($i = 0; $i < count($arrroom); $i++) {
            if (strlen($grossenroll[$i]) <= 30)
                $width = 20;
            if (strlen($grossenroll[$i]) >= 30 && strlen($grossenroll[$i]) <= 60)
                $width = 40;
            if (strlen($grossenroll[$i]) >= 60 && strlen($grossenroll[$i]) <= 90)
                $width = 50;
            if (strlen($grossenroll[$i]) > 90)
                $width = 60;
            if (strlen($grossenroll[$i]) == 0) {
                $grossenroll[$i]="Nil";
                $total[$i]="Nil";
            }
            $pdf->Cell(20, $width, $i + 1, 1, 0, 'C');
            $pdf->Cell(40, $width, $arrroom[$i], 1, 0, 'C');

            $pdf->Cell(25, $width, $total[$i], 1, 0, 'C');
            $pdf->MultiCell(0, 20, $grossenroll[$i], 1, 'C');

            $pdf->Ln(10);
        }
        $pdf->Output();
    }
    else
        header('location: seatForm.php?msg=Not Enough Rooms provided according to the Capacity.');
}

?>
