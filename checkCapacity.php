<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
$cap =$_GET['cap'];
$room = $_GET['room'];
$enroll =$_GET['enroll'];
$exclude = $_GET['exclude'];
$arrenroll = explode(",",$enroll);
$arrroom = explode(",",$room);
$arrexclude = explode(",",$exclude);
if((count($arrroom)*$cap)>=(count($arrenroll)-count($arrexclude)))
{
    echo"<font color='green' size='3'>In Range...Proceed</font>";
}
        else
            echo "<font color='red' size='3'>Out of Range.</font>";
?>
