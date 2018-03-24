<?php
session_start();
include 'dbconfig.php';
if(!isset($_SESSION['name']))
    header('location: login.php');
$user = $_POST['desirename'];
$pwd = $_POST['temppwd'];
if($_SESSION['name']=='admin'){
$sql="INSERT INTO exam_cell.login values ('".$user."','".$pwd."',0,0)";
mysql_query($sql);
header('location: home.php?msg=User Added successfully');
}
else header('location: home.php?msg=You are not permitted to add users.');

?>
