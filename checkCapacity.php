<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
$cap =$_GET['cap'];
$room = $_GET['room'];
$enroll =$_GET['enroll'];
$exclude = $_GET['exclude'];
$capacity = explode(",", $cap);
$arrenroll = explode(",",$enroll);
$arrroom = explode(",",$room);
$totalCapacity = 0;
for($i=0;$i<count($capacity);$i++){
    $totalCapacity = $totalCapacity+$capacity[$i];
}
$k = 0;
for ($i = 0; $i <= count($arrroom); $i++)
    for ($j = $i + 1; $j <= count($arrroom); $j++) {
        if ($arrroom[$i] == $arrroom[$j])
            $troom = 1;
    }
if ($arrexclude != null) {
    for ($i = 0; $i <= count($arrexclude); $i++)
        for ($j = $i + 1; $j <= count($arrexclude); $j++) {
            if ($arrexclude[$i] == $arrexclude[$j])
                $texclude = 1;
        }
}
if ($arrexclude != null) {
    for ($i = 0; $i <= count($arrexclude); $i++) {
        for ($j = 0; $j < count($arrenroll); $j++) {
            if ($arrexclude[$i] == $arrenroll[$j])
                $tmatch[$k] = 1;
        }
        $k++;
    }
    for ($i = 0; $i <= count($arrexclude); $i++) {
        if ($tmatch[$i] != 1)
            $temp = 1;
    }
}
if ($troom == 1)
    echo"<font color='red' size='3'>Don\'t Repeat same room nos.</font>";
else if ($texclude == 1)
    echo"<font color='red' size='3'>Don\'t Repeat same Enrollment nos.</font>";
else if ($temp == 1)
     echo"<font color='red' size='3'>Enrollment no. not found.'</font>";
else if(($totalCapacity)>=(count($arrenroll)-count($arrexclude)))
{
    if(count($arrroom)>=count($capacity))
    echo"<font color='green' size='3'>In Range...Proceed</font>";
    else
            echo "<font color='red' size='3'>Provide more Room numbers.</font>";
}
else
      echo "<font color='red' size='3'>Room Capacity provided is lower than needed.</font>";
?>
