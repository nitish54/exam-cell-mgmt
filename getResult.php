<?php

include 'dbconfig.php';
$q=$_GET["q"];
$table=$_GET["name"];

$db = explode("_",$table);
$break = str_split($db[0], 2);
$session = $db[0].'-'.($break[1]+1);
$semester = $db[1].$db[3];
$sql1="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."'";
$result1 = mysql_query($sql1);
$row1 = mysql_fetch_array($result1) or die('Error: ' . mysql_error());

$sql2="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and result = 'pass'";
$result2 = mysql_query($sql2);
$row2 = mysql_fetch_array($result2) or die('Error: ' . mysql_error());

$sql3="SELECT max(marks) FROM exam_cell.$table";
$result3 = mysql_query($sql3);
$row3 = mysql_fetch_array($result3) or die('Error: ' . mysql_error());
if($row3[0]>10){
    $sql4="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks >= 750";
    $result4 = mysql_query($sql4);
    $row4 = mysql_fetch_array($result4) or die('Error: ' . mysql_error());
    
    $sql5="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks between 650 and 749";
    $result5 = mysql_query($sql5);
    $row5 = mysql_fetch_array($result5) or die('Error: ' . mysql_error());
    
    $sql6="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks between 550 and 649";
    $result6 = mysql_query($sql6);
    $row6 = mysql_fetch_array($result6) or die('Error: ' . mysql_error());
    
    $sql7="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks between 400 and 549";
    $result7 = mysql_query($sql7);
    $row7 = mysql_fetch_array($result7) or die('Error: ' . mysql_error());
    
    $sql8="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks < 400";
    $result8 = mysql_query($sql8);
    $row8 = mysql_fetch_array($result8) or die('Error: ' . mysql_error());
   
}
else{
   $sql4="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks >= 7.50";
    $result4 = mysql_query($sql4);
    $row4 = mysql_fetch_array($result4) or die('Error: ' . mysql_error());
    
    $sql5="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks between 6.50 and 7.49";
    $result5 = mysql_query($sql5);
    $row5 = mysql_fetch_array($result5) or die('Error: ' . mysql_error());
    
    $sql6="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks between 5.50 and 6.49";
    $result6 = mysql_query($sql6);
    $row6 = mysql_fetch_array($result6) or die('Error: ' . mysql_error());
    
    $sql7="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks between 4.00 and 5.49";
    $result7 = mysql_query($sql7);
    $row7 = mysql_fetch_array($result7) or die('Error: ' . mysql_error());
    
    $sql8="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and marks < 4.00";
    $result8 = mysql_query($sql8);
    $row8 = mysql_fetch_array($result8) or die('Error: ' . mysql_error());
   
}
 
    $sql9="SELECT count(enroll_no) FROM exam_cell.$table WHERE branch = '".$q."' and result = 'fail'";
    $result9 = mysql_query($sql9);
    $row9 = mysql_fetch_array($result9) or die('Error: ' . mysql_error());
    
mysql_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<div align="center">
  <table width="688" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="121" height="45">&nbsp;</td>
      <td width="145">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td width="162">&nbsp;</td>
      <td width="240">&nbsp;</td>
    </tr>
    <tr>
     <td height="24"></td>
      <td valign="top">Session</td>
      <td>&nbsp;</td>
      <td valign="top">
        <input type="text" name="textfield" value="<?php echo $session ?>" readonly />
         </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td valign="top">Semester</td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield2" value="<?php echo $semester ?>" readonly />
          </td>
      <td></td>
    </tr>
    <tr>
      <td height="15"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td valign="top">Branch</td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield3" size="35" value="<?php echo $q ?>" readonly />
           </td>
      <td></td>
    </tr>
    <tr>
      <td height="14"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td valign="top">Students Appeared </td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield4" value="<?php echo $row1[0] ?>" readonly />
          </td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td valign="top">Passed</td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield5" value="<?php echo $row2[0] ?>" readonly/>
          </td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td valign="top">Above 75% </td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield6" value="<?php echo $row4[0] ?>" readonly/>
          </td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td valign="top">Between 65 to 75% </td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield7" value="<?php echo $row5[0] ?>" readonly/>
         </td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="21"></td>
      <td valign="top">Between 55 to 65% </td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield8" value="<?php echo $row6[0] ?>" readonly/>
         </td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="21"></td>
      <td valign="top">Between 40 to 55% </td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield9" value="<?php echo $row7[0] ?>" readonly/>
       </td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="21"></td>
      <td valign="top">Below 40 % </td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield10" value="<?php echo $row8[0] ?>" readonly/>
            </td>
      <td></td>
    </tr>
    <tr>
      <td height="15"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="23"></td>
      <td valign="top">Failed</td>
      <td></td>
      <td valign="top">
        <input type="text" name="textfield11" value="<?php echo $row9[0] ?>" readonly/>
      
      </td>
      <td></td>
    </tr>
      <tr>
      <td height="75"></td>
      <td></td>
      <td colspan="4"><form name="form1" method="post" action="generateExcel.php">
              <input type="submit" name="btnsubmit" value="Generate Excel Sheet" align="center"/>
        </form>
      </td>
      <td></td>
    </tr>
    
  </table>
</div>
</body>
</html>
<?php
    $fh = fopen("upload/temporary.txt", "r") or die('can\'t open file');
     $fp = fopen("upload/temporary.txt", 'a') or die('can\'t open file');
     if($q != "Select Branch"){
      $line1 = "$session,$semester,$q,$row1[0],$row2[0],$row4[0],$row5[0],$row6[0],$row7[0],$row8[0],$row9[0]\n";
      while(!feof($fh))
      {
          $oneline = fgets($fh);
          if($oneline==$line1) $z=1;          
      }
      if($z!=1) fwrite($fp, $line1);   
     }
    fclose($fp);
    fclose($fh);


?>
