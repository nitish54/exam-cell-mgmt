<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
include 'dbconfig.php';
$year = $_GET['year'];
$cap =$_GET['cap'];
$rc =$_GET['rc'];
$room = $_GET['room'];
$enroll =$_GET['enroll'];
$exclude = $_GET['exclude'];
$capacity = explode(",", $cap);
$rowcolumn = explode(",", $rc);
$arrenroll = explode(",",$enroll);
$arrroom = explode(",",$room);
$totalCapacity = 0;
for($i=0;$i<count($capacity);$i++){
    $totalCapacity = $totalCapacity+$capacity[$i];
}
if ($exclude != "")
    $arrexclude = explode(",", $exclude);
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
else
doWork($arrroom, $arrenroll, $arrexclude, $totalCapacity, $capacity, $year, $rowcolumn);

function doWork($arrroom, $arrenroll, $arrexclude, $totalCapacity, $capacity, $year, $rowcolumn) {
    if (($totalCapacity) >= (count($arrenroll) - count($arrexclude))) {
          if(count($arrroom)>=count($capacity)){
        static $total = array();
        //$grossenroll = enrollno($capacity, $arrenroll, $arrexclude, $grossenroll, $total);
        static $p = 0, $m = 0;
        $count = 0;$o=0;
        if ($arrexclude != null) {
            for ($t = 0; $t < count($arrexclude); $t++) {
                for ($j = 0; $j < count($arrenroll); $j++) {
                    if ($arrexclude[$t] == $arrenroll[$j])
                        unset($arrenroll[$j]);
                }
            }
        }
        array_unshift($arrenroll, array_shift($arrenroll));
        $h=0;
        for ($i = 0; $i < count($arrenroll); $i+=$capacity[$h++]) {
            $start = $arrenroll[$i];
            $finallist = array();
            $next = array();
            if ((count($arrenroll) - $count) >= $capacity[$h]) {
                $end = $arrenroll[$count + $capacity[$h] - 1];
                $count = $count + $capacity[$h];
                $total[$m++] = $capacity[$h];
                $check = 0;
                $check1 = 0;
                for ($a = $i; $a < $count; $a++) {
                    $sql = "Select * from exam_cell.$year where enroll_no = '$arrenroll[$a]'";
                    $res = mysql_query($sql);
                    $row = mysql_fetch_array($res);
                    $branch[$check++] = $row['branch'];
                    $enrl[$check1++] = $row['enroll_no'];
                    }
                    $special[$o++] = implode(",", $enrl);
            $b = 0;
            $c = 0;
                for ($l = 0; $l < count($branch); $l++) {
                    if ($branch[$l] != $branch[0]) {
                        $finallist[$b++] = $enrl[$l - 1];
                        $next[$c++] = $enrl[$l];
                        $branch[0] = $branch[$l];
                    }
                }
            } else {
                $end = $arrenroll[count($arrenroll) - 2];
                $total[$m++] = (count($arrenroll) - $count - 1);
                $check = 0;
                $check1 = 0;
                for ($a = $i; $a < count($arrenroll)-1; $a++) {
                    $sql = "Select * from exam_cell.$year where enroll_no = '$arrenroll[$a]'";
                    $res = mysql_query($sql);
                    $row = mysql_fetch_array($res);
                    $branch[$check++] = $row['branch'];
                    $enrl[$check1++] = $row['enroll_no'];
                    }
                    $special[$o] = implode(",", $enrl);
             }
            
            if (count($finallist) == 0)
                $grossenroll[$p++] = $start . " to " . $end;
            else if (count($finallist) == 1) {
                $grossenroll[$p++] = $start . " to " . $finallist[0] . " And " . $next[0] . " to " . $end;
               } 
               else if (count($finallist) == 2) {
                $grossenroll[$p++] = $start . " to " . $finallist[0] . " And " . $next[0] . " to " . $finallist[1] . " And " . $next[1] . " to " . $end;
            }
            else
                $grossenroll[$p++] = "Over " . ($finallist[2].$finallist[3].count($finallist));
            unset($finallist);
            unset($next);
            unset($branch);
            unset($enrl);
        }
        echo "<table border='1' width='600'>";
        echo "<tr><th>Room No.</th><th>Capacity</th><th>Range</th><th>Rows X Columns</th></tr>";
       for($r=0;$r<count($arrroom);$r++)
        {
           echo "<tr>";
            echo "<td>$arrroom[$r]</td>
           <td><input type='text' value='$total[$r]' size='2' readonly='true'></td> 
           <td><input type='text' value='$special[$r]' size='6' readonly='true'></td>
            <td><input type='text' value='$rowcolumn[$r]' size='4' readonly='true'></td>
           <td><a href='showRoom.php?range=$special[$r]&room=$arrroom[$r]&rc=$rowcolumn[$r]' target='_blank'>
           <input type='button' value='Show Arrangement'></a></td><br/>";
           echo "</tr>";
        }
          }
    }
          }

?>
