<?php
$id = $_GET['id'];
include 'dbconfig.php';
$item = "SELECT id FROM exam_cell.idcard WHERE id='$id'";
$result = mysql_query($item);
$row = mysql_fetch_array($result);
if(!$row[0]) echo "<img src='images/wrong.gif' width='20' height='20'>";
else echo "<img src='images/correct.gif' width='20' height='20'>";
mysql_close();

?>
