<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$dbSelected = mysql_select_db("exam_cell");
?>
