<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
else {
    $username = $_SESSION['name'];
}
include 'dbconfig.php';
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


<html>
    <title>Exam Cell Portal</title>
    <head>
    
    </head>
    <?php   include 'mainheader.php';?> 
    <body>
        <div align="center">            
            <table width="1000" border="1">
                <tr>
                     <td valign="top" width="144" bgcolor="#006699">
                      <?php   include 'lm_home.php'; ?>   
                        
                    </td>
                    <td>
                    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="654" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="12" height="30">&nbsp;</td>
      <td width="137">&nbsp;</td>
      <td width="25">&nbsp;</td>
      <td width="64">&nbsp;</td>
      <td width="49">&nbsp;</td>
      <td width="27">&nbsp;</td>
      <td width="29">&nbsp;</td>
      <td width="84">&nbsp;</td>
      <td width="40">&nbsp;</td>
      <td width="10">&nbsp;</td>
      <td width="177">&nbsp;</td>
    </tr>
    <tr>
      <td height="44">&nbsp;</td>
      <td rowspan="6" valign="top"><form id="form2" name="form2" method="post" action="">
        <label>
          <input type="image" name="imageField" src="photoviewer.php" width="130" height="170"/>
          </label>
      </form>      </td>
      <td>&nbsp;</td>
      <td colspan="6" valign="top"><span class="style1">Admin Profile </span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="51">&nbsp;</td>
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
    
    
    <tr>
      <td height="20"></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">Name</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[1]?></font></label></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="21"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="20"></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">Username</td>
      <td></td>
      <td colspan="2" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[0]?></font></label></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="29"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">Date of Birth</td>
      <td></td>
      <td colspan="2" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[3]?></font></label></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="14"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Age</td>
      <td></td>
      <td colspan="2" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $dob." Years"?></font></label></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="16"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Designation</td>
      <td></td>
      <td colspan="2" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[2]?></font></label></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="20"></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">Address</td>
      <td></td>
      <td colspan="2" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[4]?></font></label></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="18"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Mobile No.</td>
      <td></td>
      <td colspan="2" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[5]?></font></label></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="17"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Email ID </td>
      <td></td>
      <td colspan="4" valign="top"><label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><?php echo $row[6]?></font></label></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <?php
        $msg = $_GET['msg'];
        if($msg!=null){
            echo '<h3><font color="red">'.$msg.'<h3>';
        }
        ?>
      <td height="52"></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td height="24"></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top"><form id="form1" name="form1" method="post" action="home.php">
        <label>
            <input type="submit" name="Button" value="         OK         "/>
          </label>
      </form></td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
  </table>
</div>
</body>
</html>

                    </td>
                </tr>
                
            
            </table>  
        </div>
        
        
    </body>
    <?php   include 'footer.php';?>
    
</html>