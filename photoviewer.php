<?php

session_start();
$username = $_SESSION['name'];
include 'dbconfig.php';
$sql="SELECT photo FROM exam_cell.profile WHERE username = '".$username."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$img = base64_decode($row[0]);
header("content-type: image/jpeg");
echo $img;
?>
