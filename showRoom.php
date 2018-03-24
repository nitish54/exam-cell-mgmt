<?php
include 'dbconfig.php';
$room = $_GET['room'];
$range = $_GET['range'];
$rc = $_GET['rc'];
$rowcol = explode("x", $rc);
$enrollment = explode(",",$range);

require('fpdf/fpdf.php');

        class PDF extends FPDF {

            function Header() {
                // Logo
                $this->Image('images/blacklogo.jpg', 10, 6, 30);
                // Select Arial bold 15
                $this->SetFont('Arial', 'B', 30);
                $this->Ln(7);
                // Move to the right
                $this->Cell(90);
                // Framed title
                $this->Cell(50, 10, 'Room Seating Arrangement Plan', 0, 0, 'C');
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
                $this->Cell(55, 10, 'Principal\'s Signature', 0, 0, 'C');
            }

        }
        
        $pdf = new PDF();
        $pdf->AliasNbPages();
        if($rowcol[1]>=6){
        $pdf->AddPage("L");
        if($rowcol[1]>=6 && $rowcol[1]<=7)
        $width=40;
        else $width=36;
        }
        else{
            $pdf->AddPage();
            if($rowcol[1]>=4 && $rowcol[1]<=5) $width=40;
        }
        $pdf->Ln(20);
        $pdf->Cell(90);
        $pdf->SetFont('Arial', 'B', 20);

        $pdf->Cell(70, 10, 'Room No. : ' . $room, 0, 0, 'C');
        $pdf->SetFont('Arial', 'B', 20);
        $pdf->Ln(20);
        $pdf->SetFont('Times', '', 16);
        $pdf->setDisplayMode('fullwidth');
        $r=0;
        $col = $rowcol[1]; $row = $rowcol[0];
    for ($j = 0; $j < $rowcol[0]; $j++) {    
        $n=0;
        while($n!=$col){
        $pdf->Cell($width, 15, $enrollment[$r+(($row)*$n)], 1, 0, 'C');    
        $n++;
    }   $r++;
        $pdf->Ln(20);
    }
      $pdf->Ln(20);
        $pdf->Output();
    
?>
