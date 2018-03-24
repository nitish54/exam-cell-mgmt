<?php
$con = mysql_connect("localhost","examcell","Exam_cell");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$dbSelected = mysql_select_db("exam_cell");
?>
