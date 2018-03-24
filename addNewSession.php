<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');

?>
<html>
    <title>Exam Cell Portal</title>
    <?php include 'mainheader.php'; ?> 
    <body>
        <div align="center" valign="top">            
            <table width="1000" border="1" valign="top">
                <tr>
                    <td valign="top" width="144" bgcolor="#006699">
                        <?php include 'lm_student.php'; ?>                           
                    </td>
                    <td>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style2 {font-size: 24px;
         color: orange;   
        }
.style3 {font-size: 35px;
         color: blue;   
        }
.style4 {font-size: 24px;}
-->
</style>
</head> 
    <script type="text/javascript">
        function uppercase()
{
  var enrollno= document.getElementById('txtEnroll');
  enrollno.value=enrollno.value.toUpperCase();
}
  
function submitwork(){
    var year = document.getElementById('txtYear').value;
    if(yearTest(year)==false){
        document.getElementById('txtYear').value="";
        alert("Enter only numeric characters of 4 digits");
        return;
    }
    else{
        var text = document.getElementById('txt');
    if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        text.innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","createNewSession.php?year="+year,true);
xmlhttp.send();
document.getElementById('txtYear').disabled=true;
document.getElementById("tableDiv").style.visibility="visible";
}
     function yearTest(input){
        var YEAR_EXPR = /^[0-9]{4}$/;
        return YEAR_EXPR.test(input);
     }
}
function uppercase()
    {
    var enrollno= document.getElementById('txtEnroll');
    enrollno.value=enrollno.value.toUpperCase();
    }
function insRow()
{
    var enrollno= document.getElementById('txtEnroll').value;
    var select= document.getElementById('select').value;
    var year =document.getElementById('txtYear').value;
    if(enrollno=="" || select=="select")
        {
        alert("Fill Required entries!!!");
        return;
        }
    var x=document.getElementById('POITable').insertRow(1);
    var c1=x.insertCell(0);
    var c2=x.insertCell(1);
    var c3=x.insertCell(2); 
 if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   c1.innerHTML=enrollno;
    c2.innerHTML=select;
    c3.innerHTML="INSERTED SUCCESSFULLY".fontcolor('blue');
    document.getElementById('txtEnroll').value="";
    document.getElementById('select').value="select";
    }
  }
xmlhttp.open("GET","updateAction.php?enroll="+enrollno+"&branch="+select+"&year="+year+"&mode=insert",true);
xmlhttp.send();
}

function setFocus(val){
   if( val=="Enter Enrl. No."){
     document.getElementById('txtEnroll').value="0205";
     document.getElementById('txtEnroll').style.opacity="1";
   }
}
function setBlur(val){
   if(val=="" || val=="0205"){
       document.getElementById('txtEnroll').style.opacity="0.4";
     document.getElementById('txtEnroll').value="Enter Enrl. No.";
   }
}
    </script>
    <body>
<div align="center">
  <table width="586" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <div align="center"><span class="style3">Add New Year</span></div><br/><br/>
        <td align="left"><span class="style4">Enter Year : </span>
            <input type="text" name="txtYear" id="txtYear"/>eg. 2012
            <input type="button" id="Submit" value="   Submit   " onclick="submitwork()"/><br/>
            <label id="txt"></label>
        </td>
    </tr>
      <tr><td><br/><br/><br/><br/>
                <div id="tableDiv" style="visibility: hidden">
                    <center>
                        <div align="center"><span class="style2">Add Student Details...one by one</span> </div>
                    </center><br/>
      <table id="POITable" border="1">
        <tr>
            <th>Enrollment No.</th>
            <th>Branch</th>
            <th>Status</th>
        </tr>
        <tr>
            <td><input size=15 type="text" id="txtEnroll" name="txtEnroll" autocomplete="off" style="opacity:0.4;" onfocus="setFocus(this.value)" onblur="setBlur(this.value)" value="Enter Enrl. No." onkeyup="uppercase()"/></td>
            <td><select name="select" id="select">
          <option selected="selected" value="select">Select Branch</option>
          <option value="Computer Science and Engineering">Computer Science &amp; Engineering</option>
          <option value="Electronics and Communication Engineering">Electronics &amp; Communication Engineering</option>
          <option value="Electrical and Electronics Engineering">Electrical &amp; Electronics Engineering</option>
          <option value="Information Technology">Information Technology</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          </select></td>
            <td>
            <input type="button" id="addmoreButton" value="Add More Rows" onclick="insRow()"/>
            </td>
        </tr>
    </table>
            <br/><br/>
</div>
            </td></tr>  
  </table>
</div>
    </body>
    </html>
                    </td>
                </tr>
            </table>  
        </div>
    </body>
    <?php include 'footer.php'; ?>

</html>
