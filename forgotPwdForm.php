<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>
       Examination Cell Portal     
        </title>
    </head>
    <script type="text/javascript">
    function func()
    {
        var result = /^([a-zA-Z0-9]+)$/;
        if(document.forms["fpwd"]["name"].value=="")
            {
                alert("Username can not be empty");
                return false;
            }
        if(document.forms["fpwd"]["email"].value=="")
            {
                alert("EmailId can not be empty");
                return false;
            }
        if(result.test(document.forms["fpwd"]["name"].value)==false){
                 alert("Improper format of username given.");
                return false; 
       }
       if(emailTest(document.forms["fpwd"]["email"].value)==false){
           alert("Enter Proper mail address..");
           return false;
       }
      else return true;
    }
    function emailTest(input){
        var EMAIL_EXPR = /^[a-z0-9\.\_]{3,25}[@][a-z]{3,10}[.][a-z]{2,3}[.]{0,1}[a-z]{0,2}$/;
        return EMAIL_EXPR.test(input);
    }
   
 </script>
<body bgcolor="#E8DFE2">
<table width="999" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
      <td height="20" colspan="2" valign="top"><div align="right"><span class="style2">
                  <img src="images/055.gif" width="20" height="20" />&nbsp;<a href="help.php"><font size="4">Help</font></a></span> </div></td>
  <td width="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="110" colspan="2" valign="top"><img src="images/bannerfans_3130759 (2).jpg" width="999" height="110" /></td>
  <td>&nbsp;</td>
  </tr>
  <form name="fpwd" method="post" action="forgotPassword.php">
  <tr>
      <td align="center" valign="top">
          <br/><br/>
          <?php
          $msg = $_GET['msg'];
          echo "<font size='4'>".$msg."</font>";
          ?><br/><br/>
          <font color="black" size="5">Enter Information below to recover your password.</font>
          <br/><br/>
          <br/><br/>
          Enter your username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input type="text" name="name" id="name" size="20" maxlength="20" autocomplete="off"/><br/><br/>
          <br/>
          Enter your registered email id &nbsp;&nbsp;: <input type="text" name="email" id="email" size="20" autocomplete="off"/><br/><br/>
          <br/>
          <input type="submit" name="btnsubmit" value="  Submit  " class="style1" onclick="return func();" />
     </label>
     <label>
     <input type="reset" name="btnreset" value="Reset" class="style1"/>
     </label>
     <br/><br/><br/>
      </td>
 </tr>
   </form>
  <tr>
       <td height="35"</td>
  </tr>
  <tr>
       <td height="35" colspan="2" valign="top" ><div align="center"><img src="images/footer.jpg"</div></td>
  <td >&nbsp;</td>
  </tr>
  
</table>
</body>
</html>