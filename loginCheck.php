<?php
session_start();
include 'dbconfig.php';
$username = $_POST["name"];
$password = $_POST["pwd"];

$sql="SELECT * FROM exam_cell.login WHERE username = '".$username."' and password = '".$password."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if($row[0])
{
    $_SESSION['name']=$username;
    header("location: home.php");
}
else {
    
    header("location: login.php?msg=Either username or Password is incorrect");
}
?>
