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
    $sql1="SELECT * FROM exam_cell.profile WHERE username = '".$username."'";
    $res = mysql_query($sql1);
    $rows = mysql_fetch_array($res);
    $_SESSION['user'] = $rows[1];
    header("location: home.php");
}
else {
    
    header("location: login.php?msg=Either username or Password is incorrect");
}
?>
