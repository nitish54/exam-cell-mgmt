<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');
$name = $_GET['name'];
$dept = $_GET['dept'];
$design = $_GET['design'];
$email = $_GET['email'];
$mode = $_GET['mode'];
include 'dbconfig.php';
if ($mode == "insert") {
    $query = "Select * from exam_cell.teachers where name='$name' and email='$email'";
    $res = mysql_query($query);
    $row = mysql_fetch_array($res);
    if (!$row[0]) {
        $sql = "insert into exam_cell.teachers values('" . $name . "','" . $dept . "','" . $design . "','" . $email . "')";
        mysql_query($sql);
        echo"<font color='blue'>INSERTION SUCCESSFUL";
    }
    else
        echo"<font color='green'>ALREADY EXISTS";
}
else if ($mode == "delete") {
    $query = "Select * from exam_cell.teachers where email='$email'";
    $res = mysql_query($query);
    $row = mysql_fetch_array($res);
    if ($row[0]) {
        $sql = "delete from exam_cell.teachers where email='$email'";
        mysql_query($sql);
        echo"<font color='orange'>DELETION SUCCESSFUL";
    }
    else
        echo"<font color='red'>MATCH NOT FOUND";
}
mysql_close();
?>