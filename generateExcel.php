<?php

include 'include/excelwriter.inc.php';
$fileName = "upload/mynewxls.xls";
$file = "upload/temporary.txt";
$excel = new ExcelWriter($fileName);
$fh = fopen("upload/temporary.txt", "r") or die('can\'t open file');
	while(!(feof($fh)))
        {
            $line = fgets($fh);
            $myArr = explode(",",$line);
            if($excel==false)
            {
		echo $excel->error;
		die;
            }
	
	$excel->writeLine($myArr, array());
        }
    fclose($fh);
    unlink($file);
    $excel->close();
    header('location: downloadExcel.php');
?>
