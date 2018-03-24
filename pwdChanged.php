<?php

session_start();
include 'dbconfig.php';
$username= $_SESSION['name'];
$crntpwd = $_POST['txtcrntpwd'];
$newpwd = $_POST['txtpwd'];
$sql="SELECT * FROM exam_cell.login WHERE username = '".$username."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if($row[1]==$crntpwd){
$sql1="UPDATE exam_cell.login SET password = '".$newpwd."' WHERE username = '".$username."'";
mysql_query($sql1);
header('location: viewProfile.php?msg=Password Changed Successfully');
}
else header('location: viewProfile.php?msg=Current Password Incorrect');
?>
