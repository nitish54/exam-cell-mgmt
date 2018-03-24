<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
else {
    $username = $_SESSION['name'];
}
?>
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
body{
    background-color: #E8DFE2;
}
-->
</style>
</head>
<script type="text/javascript">
    function func()
    {
        if(document.forms["form1"]["txtpwd"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
        if(document.forms["form1"]["txtcnfrmpwd"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
        if(document.forms["form1"]["txtname"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
        if(document.forms["form1"]["txtdob"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
             if(document.forms["form1"]["txtdesign"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
            if(document.forms["form1"]["txtadd"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
        if(document.forms["form1"]["txtmob"].value=="")
            {
                alert("Please fill all the details");
                return false;
            }
             if(document.forms["form1"]["txtemail"].value=="")
            {
                alert("Please fill all the details");
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
  <table width="654" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="91" height="30">&nbsp;</td>
      <td width="36">&nbsp;</td>
      <td width="21">&nbsp;</td>
      <td width="54">&nbsp;</td>
      <td width="50">&nbsp;</td>
      <td width="9">&nbsp;</td>
      <td width="11">&nbsp;</td>
      <td width="22">&nbsp;</td>
      <td width="19">&nbsp;</td>
      <td width="76">&nbsp;</td>
      <td width="26">&nbsp;</td>
      <td width="77">&nbsp;</td>
      <td width="54">&nbsp;</td>
      <td width="32">&nbsp;</td>
      <td width="6">&nbsp;</td>
      <td width="72">&nbsp;</td>
    </tr>
    <tr>
      <td height="44">&nbsp;</td>
      <td colspan="13" valign="top"><span class="style1">Register as an ADMIN </span></td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    

    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Username</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="6" valign="top"><form id="form1" name="form1" method="post" action="registeredPage.php" enctype="multipart/form-data">
        <label>
          <input type="text" name="txtusername" value="<?php echo $username ?>" readonly/>
          </label>
        </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="23"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
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
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Password</td>
      <td></td>
      <td></td>
      <td colspan="4" valign="top">
        <label>
            <input type="password" name="txtpwd" maxlength="15"/>
          </label>
      </td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="21"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
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
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td>&nbsp;</td>
      <td colspan="4" valign="top">Confirm Password </td>
      <td>&nbsp;</td>
      <td colspan="4" valign="top">
        <label>
            <input type="password" name="txtcnfrmpwd" maxlength="15"/>
          </label>
          </td>
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
      <td>&nbsp;</td>
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
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Name</td>
      <td></td>
      <td></td>
      <td colspan="6" valign="top">
        <label>
          <input type="text" name="txtname" />
          </label>
    </td>
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
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Date of Birth</td>
      <td></td>
      <td></td>
      <td colspan="6" valign="top">
        <label>
          <input type="text" name="txtdob" />
          &nbsp; yyyy-mm-dd</label>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
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
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Designation</td>
      <td></td>
      <td></td>
      <td colspan="6" valign="top">
        <label>
          <input type="text" name="txtdesign" />
          </label>
      </td>
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
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="35"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Address</td>
      <td></td>
      <td></td>
      <td colspan="6" valign="top">
        <label>
          <textarea name="txtadd"></textarea>
          </label>
     </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
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
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Mobile No.</td>
      <td></td>
      <td></td>
      <td colspan="6" valign="top">
        <label>
          <input type="text" name="txtmob" />
          </label>
   </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
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
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Email ID </td>
      <td></td>
      <td></td>
      <td colspan="8" valign="top">
        <label>
          <input name="txtemail" type="text" size="40" />
          </label>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="20"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td></td>
    </tr>
    
    <tr>
      <td height="25"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Change Photo </td>
      <td></td>
      <td></td>
      <td colspan="5" valign="top">
        <label>
          <input type="file" name="file" />
          </label>
      </td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="31"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
      <td></td>
    </tr>
    
    <tr>
      <td height="24"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td colspan="4" valign="top">
        <label>
          <input name="submit" type="submit" id="submit" value="   Submit    " onclick="return func();"/>
          </label>
      </td>
      <td>&nbsp;</td>
      <td valign="top">
        <label>
          <input name="reset" type="reset" id="reset" value="   Reset   " />
          </label>
      </form></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="44"></td>
      <td></td>
      <td></td>
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
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
</body>
</html>
