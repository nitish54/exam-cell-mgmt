<?php
session_start();
$msg = $_GET["msg"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<script language="javascript" type="text/javascript">
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
  }
function setFocus(y){
var val = document.getElementById(y).value;
if(val=="")
{
    document.getElementById(y).style.borderColor="red";
    document.getElementById(y).style.background="#FFB599";
}
else   
{document.getElementById(y).style.background="whitesmoke";
    document.getElementById(y).style.borderColor="black";
}
}
function setBlur(y){
var val = document.getElementById(y).value;
if(val=="")
{
    document.getElementById(y).style.borderColor="red";
    document.getElementById(y).style.background="#FFB599";
}
else   
{document.getElementById(y).style.background="whitesmoke";
    document.getElementById(y).style.borderColor="black";
}
}

function prepareInputsForHints() {
  var inputs = document.getElementsByTagName("input");
  for (var i=0; i<inputs.length; i++){
    inputs[i].onfocus = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
    }
    inputs[i].onblur = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "none";
    }
  }
}
addLoadEvent(prepareInputsForHints);
function prepareInputsForHints() {
  var inputs = document.getElementsByTagName("input");
  for (var i=0; i<inputs.length; i++){
    inputs[i].onfocus = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
    }
    inputs[i].onblur = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "none";
    }
  }
  var selects = document.getElementsByTagName("select");
  for (var k=0; k<selects.length; k++){
    selects[k].onfocus = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
    }
    selects[k].onblur = function () {
      this.parentNode.getElementsByTagName("span")[0].style.display = "none";
    }
  }
}
addLoadEvent(prepareInputsForHints);
function prepareInputsForHints() {
  var inputs = document.getElementsByTagName("input");
  for (var i=0; i<inputs.length; i++){
    if (inputs[i].parentNode.getElementsByTagName("span")[0]) {
      inputs[i].onfocus = function () {
        this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
      }
      inputs[i].onblur = function () {
        this.parentNode.getElementsByTagName("span")[0].style.display = "none";
      }
    }
  }
  var selects = document.getElementsByTagName("select");
  for (var k=0; k<selects.length; k++){
    if (selects[k].parentNode.getElementsByTagName("span")[0]) {
      selects[k].onfocus = function () {
        this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
      }
      selects[k].onblur = function () {
        this.parentNode.getElementsByTagName("span")[0].style.display = "none";
      }
    }
  }
}
addLoadEvent(prepareInputsForHints);

</script>
<style type="text/css">
<!--
.style14 {color: #FFFFFF}

.style1 {font-size: 15px}

body {
	
	background-color: #333333;
}
a {
	font-size: 24px;
	color: #FFFFFF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #FF0000;
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	color: #000000;
	font-size: 16px;
        border:#333333;
}
dl {
	position: relative;
	width:200px;
	
}
dt {
  clear: both;
  float:left;
  width: 130px;
  padding: 4px 0 2px 0;
  text-align: center;
}
dd {
  float: left;
  width: 200px;
  margin: 0 0 8px 0;
  padding-left: 6px;
}
.hint {
 display:none;
  position: absolute;
  right: -250px;
  width: 200px;
  margin-top: -4px;
  border: 1px solid #c93;
  padding: 10px 12px;
  background-color:#FFFFCC;
}
.hint .hint-pointer {
    position: absolute;
    left: -10px;
    top: 5px;
    width: 10px;
    height: 19px;
    background: url(images/pointer.gif) left top no-repeat;
}
.style2 {font-size: 24px}

-->
</style>
</head>
<script type="text/javascript">
    function func()
    {
        var result = /^([a-zA-Z0-9]+)$/;
        if(document.forms["form1"]["name"].value=="")
            {
                alert("Username can not be empty");
                return false;
            }
        if(document.forms["form1"]["pwd"].value=="")
            {
                alert("Password can not be empty");
                return false;
            }
        if(result.test(document.forms["form1"]["name"].value)==false){
                 alert("Improper Data");
                return false; 
       }
      else return true;
    }
   
 </script>
<body>
<table width="999" border="0" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  
  <tr>
      <td height="20" colspan="2" valign="top"><div align="right"><span class="style2"><img src="images/066.gif" width="16" height="16" /><a href="#"><font size="3">AboutUs</font></a>&nbsp;
                  <img src="images/055.gif" width="16" height="16" /><a href="help.php"><font size="3">Help</font></a></span> </div></td>
  <td width="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="110" colspan="2" valign="top"><img src="images/bannerfans_3130759 (2).jpg" width="999" height="110" /></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="400" height="400" valign="top" bgcolor="	#124C69"><img src="images/firstpage.gif" width="400" height="400" /></td>
    <td width="533" valign="top" bgcolor="#124C69">
  <br>
      <br />
     
  <fieldset style="text-align:left;">
<legend align="left" width="400"><img src="images/068.gif" width="26" height="26" /> <font color="#FFFFFF" size="3" face="Verdana" style="background-color:#006699"> 
Admin please login here</font></legend>
 <form id="form1" name="form1" method="post" action="loginCheck.php">
      <span class="style14">
            <label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="3" align="center"><b><center><?php echo $msg ?></center></b></font></label>
          </span> 
   <dl align="center">
          <dt>
            <span class="style14">
            <label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><b>Username:</b></font></label>
          </span>          </dt>
          <dd><input name="name" type="text" id="name" maxlength="20" onfocus="setFocus(this.id)" onblur="setBlur(this.id)"/>
          <span class="hint"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Name should not exceed 20 characters.</font>
          <span class="hint-pointer"></span>  </span>		  </dd>
		   <dt>
             <span class="style14">
             <label for="firstname"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" align="left"><b>Password:</b></font></label>
          </span>          </dt>
          <dd><input name="pwd" type="password" id="pwd" maxlength="15" onfocus="setFocus(this.id)" onblur="setBlur(this.id)"/>
          <span class="hint"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Password should not exceed 15 characters.</font>
         <span class="hint-pointer"></span>  </span>		  </dd>
          
            <label></label>
            <label></label>
          
      </dl>
   
     <label><br />
     <br />
     <br />
     <br />
     <br />
     
    
	<br />  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="btnsubmit" value="Login" class="style1" onclick="return func();" />
     </label>
     <label>
     <input type="reset" name="btnreset" value="Reset" class="style1"/>
     </label>
       <br />
     <br />
     
   </form>
   <p>&nbsp;</p>
   </fieldset></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
       <td height="35" colspan="2" valign="top" ><div align="center"><img src="images/footer.jpg"</div></td>
  <td >&nbsp;</td>
  </tr>
</table>
</body>
</html>
