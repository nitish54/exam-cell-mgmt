<?php

session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
$user = $_POST['desirename'];
$pwd = $_POST['temppwd'];
include 'dbconfig.php';
$sql="INSERT INTO exam_cell.login values ('".$user."','".$pwd."')";
mysql_query($sql) or die("Error in the syntax") ;
header('location: home.php?msg=User Added successfully');

?>
