<?php
session_start();
$username = $_SESSION['name'];
$msg = $_GET['msg'];

include 'dbconfig.php';
//$username = $_GET["name"];
$sql="SELECT * FROM exam_cell.profile WHERE username = '".$username."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
  $divide = explode("-",$row[3]);
    $year_diff  = date("Y") - $divide[0];
    $month_diff = date("m") - $divide[1];
    $day_diff   = date("d") - $divide[2];
    if ($day_diff < 0 || $month_diff < 0)
      $year_diff--;
    else $year_diff;  
$dob = $year_diff;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <table width="610" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="56" height="42">&nbsp;</td>
      <td width="9">&nbsp;</td>
      <td width="45">&nbsp;</td>
      <td width="16">&nbsp;</td>
      <td width="60">&nbsp;</td>
      <td width="37">&nbsp;</td>
      <td width="81">&nbsp;</td>
      <td width="26">&nbsp;</td>
      <td width="164">&nbsp;</td>
      <td width="116">&nbsp;</td>
    </tr>
    <tr>
        <?php if($msg!=null) echo '<h3><font color="red">'.$msg.'<h3>';?>
    </tr>
    <tr>
      <td height="34"></td>
      <td colspan="4" rowspan="6" valign="top">
        <img src="photoviewer.php" width="130" height="170"/>
      
      </td>
      <td>&nbsp;</td>
      </td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    
    <tr>
      <td height="2"></td>
      <td></td>
      <td rowspan="2" valign="top">Name</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td></td>
      <td valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[1] ?></font></label></td>
      <td></td>
    </tr>
    <tr>
      <td height="18"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    
    <tr>
      <td height="19"></td>
      <td>&nbsp;</td>
      <td valign="top">Designation</td>
      <td></td>
      <td valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[2]?></font></label></td>
      <td></td>
    </tr>
    <tr>
      <td height="61"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="30"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    
    <tr>
      <td height="0">&nbsp;</td>
      <td>&nbsp;</td>
      <td valign="middle"><div align="right">Age</div></td>
      <td>&nbsp;</td>
      <td valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $dob." Years" ?></font></label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="191">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
