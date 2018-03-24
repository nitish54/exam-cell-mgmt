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
<title>Register New User</title>
</head>
    <script type="text/javascript">
function f_valid()
    {
        if(document.forms["form1"]["desirename"].value=="")
            {
                alert("Username can not be empty");
                return false;
            }
        if(document.forms["form1"]["temppwd"].value=="")
            {
                alert("Password can not be empty");
                return false;
            }
     
      else return true;
    }
</script>
    <style type="text/css">
<!--
.style2 {font-size: 36px}
-->
</style>
<body>
<div align="center">
  <table width="591" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="86" height="83">&nbsp;</td>
      <td width="116">&nbsp;</td>
      <td width="71">&nbsp;</td>
      <td width="9">&nbsp;</td>
      <td width="30">&nbsp;</td>
      <td width="74">&nbsp;</td>
      <td width="43">&nbsp;</td>
      <td width="162">&nbsp;</td>
    </tr>
      <tr>
      <td height="28">&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="7" valign="top"><div align="left"><span class="style2">Add a New User </span></div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="32">&nbsp;</td>
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
    <tr><form name="form1" id="form1" method="post" action="userAdded.php">
      <td height="23"></td>
      <td colspan="2" valign="top"><div align="center">Registered Username </div></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top">
        <label>
          <input type="text" name="textfield" value="<?php echo $username  ?>" readonly/>
          </label>
          </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td colspan="2" rowspan="3" valign="top"><div align="center">Desired username for the new user </div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td></td>
      <td colspan="3" valign="top">
        <label>
          <input type="text" name="desirename" />
          </label>
           </td>
      <td></td>
    </tr>
    <tr>
      <td height="13"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="27"></td>
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
      <td colspan="2" valign="top"><div align="center">Temporary Password </div></td>
      <td></td>
      <td colspan="3" valign="top">
        <label>
          <input type="password" name="temppwd" />
          </label>
         </td>
      <td></td>
    </tr>
    <tr>
      <td height="41"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">
        <label>
          <input type="submit" name="Submit" value="   Submit   " onclick="return f_valid();"/>
          </label>
      </td>
      <td>&nbsp;</td>
      <td valign="top">
        <label>
          <input name="reset" type="reset" id="reset" value="   Reset   " />
          </label>
      </form></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="281"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
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