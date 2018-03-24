<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
else {
    $username = $_SESSION['name'];
}
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
<title>Change Password</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
</style>
</head>
<script type="text/javascript">
    function func()
    {
        if(document.forms["form1"]["txtcrntpwd"].value=="")
            {
                alert("Current Password field can not be empty");
                return false;
            }
        if(document.forms["form1"]["txtpwd"].value=="")
            {
                alert("New Password field can not be empty");
                return false;
            }
        if(document.forms["form1"]["txtcnfrmpwd"].value=="")
            {
                alert("Confirm Password field can not be empty");
                return false;
            }
        if(document.forms["form1"]["txtpwd"].value != document.forms["form1"]["txtcnfrmpwd"].value)
             {
                alert("Password doesn't match");
                return false;
            }
      else return true;
    }
   
 </script>
<body>
<div align="center">
  <table width="544" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="33" height="38">&nbsp;</td>
      <td width="46">&nbsp;</td>
      <td width="85">&nbsp;</td>
      <td width="30">&nbsp;</td>
      <td width="34">&nbsp;</td>
      <td width="82">&nbsp;</td>
      <td width="22">&nbsp;</td>
      <td width="43">&nbsp;</td>
      <td width="37">&nbsp;</td>
      <td width="66">&nbsp;</td>
      <td width="66">&nbsp;</td>
    </tr>
    <tr>
      <td height="42">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="6" valign="top"><span class="style1">Change Password </span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
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
      <td height="73">&nbsp;</td>
      <td colspan="2" rowspan="5" valign="top"><img src="photoviewer.php" width="130" height="170"/></td>
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
      <td height="26"></td>
      <td>&nbsp;</td><form name="form1" id="form1" method="post" action="pwdChanged.php">
      <td colspan="2" valign="top" align="right">User Name</td>
      <td></td>
      <td colspan="3" valign="top">
        <label>
          <input type="text" name="textfield" value="<?php echo $username ?>" readonly />
          </label>
      </td>
      <td></td>
    </tr>
    <tr>
      <td height="20"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top" align="right">Current Password</td>
      <td></td>
      <td colspan="3" valign="top">
        <label>
          <input name="txtcrntpwd" type="password" maxlength="15" />
          </label>
           </td>
      <td></td>
    </tr>
    <tr>
      <td height="20"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td>&nbsp;</td>
      <td colspan="4" valign="top" align="right"> New Password</td>
      <td></td>
      <td colspan="4" valign="top">
        <label>
          <input name="txtpwd" type="password" maxlength="15" />
          </label>
           </td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top"  align="right">Confirm Password </td>
      <td></td>
      <td colspan="3" valign="top">
        <label>
          <input name="txtcnfrmpwd" type="password" maxlength="15" />
          </label>
       </td>
      <td></td>
    </tr>
    <tr>
      <td height="46"></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    
    <tr>
      <td height="24"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td valign="top" align="right">
        <label>
          <input type="submit" name="Submit" value="   Submit   " onclick="return func();" />
          </label>
        </td>
      <td></td>
      <td colspan="2" valign="top" align="right">
        <label>
          <input type="submit" name="reset" value="  Reset  " />
          </label>
          </td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="50"></td>
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