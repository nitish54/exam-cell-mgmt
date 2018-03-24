<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');
$enroll = $_GET['enroll'];
$branch = $_GET['branch'];
$year = $_GET['year'];
$mode = $_GET['mode'];
include 'dbconfig.php';
if ($mode == "insert") {
    $query = "Select * from exam_cell.$year where enroll_no='$enroll'";
    $res = mysql_query($query);
    $row = mysql_fetch_array($res);
    if (!$row[0]) {
        $sql = "insert into exam_cell.$year values('" . $enroll . "','" . $branch . "')";
        mysql_query($sql);
        echo"<font color='blue'>INSERTION SUCCESSFUL";
    }
    else
        echo"<font color='green'>ALREADY ON RECORDS";
}
else if ($mode == "delete") {
    $query = "Select * from exam_cell.$year where enroll_no='$enroll'";
    $res = mysql_query($query);
    $row = mysql_fetch_array($res);
    if ($row[0]) {
        $sql = "delete from exam_cell.$year where enroll_no='$enroll'";
        mysql_query($sql);
        echo"<font color='orange'>DELETION SUCCESSFUL";
    }
    else
        echo"<font color='red'>MATCH NOT FOUND";
}
mysql_close();
?>