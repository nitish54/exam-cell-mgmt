<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');
?>
<html>
    <title>Exam Cell Portal</title>
    <?php   include 'mainheader.php';?> 
    <body>
        <div align="center" valign="top">            
            <table width="1000" border="1" valign="top">
                <tr>
                     <td valign="top" width="144" bgcolor="#006699">
                      <?php   include 'lm_student.php'; ?>                           
                    </td>
                    <td>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.style4 {font-size: 24px}
-->
</style>
</head>
<script type="text/javascript">

function uppercase()
{
  var enrollno= document.getElementById('txtEnroll');
  enrollno.value=enrollno.value.toUpperCase();
}
     function deleteRow()
{ 
    var enrollno= document.getElementById('txtEnroll').value;
      var select= document.getElementById('select').value;
    var year =document.getElementById('year').value;
    if(year=="select"){
        alert("Enter the Year please!!!");
        return;
    }
   else if(enrollno=="" || select=="select")
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
    c3.innerHTML=xmlhttp.responseText;
    document.getElementById('txtEnroll').value="";
    document.getElementById('select').value="select";
    }
  }
xmlhttp.open("GET","updateAction.php?enroll="+enrollno+"&branch="+select+"&year="+year+"&mode=delete",true);
xmlhttp.send();
}


function insRow()
{
    var enrollno= document.getElementById('txtEnroll').value;
    var select= document.getElementById('select').value;
    var year =document.getElementById('year').value;
    if(year=="select"){
        alert("Enter the Year please!!!");
        return;
    }
    else if(enrollno=="" || select=="select")
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
    c3.innerHTML=xmlhttp.responseText;
    document.getElementById('txtEnroll').value="";
    document.getElementById('select').value="select";
    }
  }
xmlhttp.open("GET","updateAction.php?enroll="+enrollno+"&branch="+select+"&year="+year+"&mode=insert",true);
xmlhttp.send();
}

function showUser(str)
{
    document.getElementById("tableDiv").style.visibility="visible";
if (str=="select")
  {
  document.getElementById("tableDiv").style.visibility="hidden";
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","studentInfo.php?q="+str,true);
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
        <td valign="top" align="left"><span class="style4">Choose Year : </span>
         
          <select name="year" id="year" onclick="showUser(this.value)">
            <option value="select">--Select Year--</option>
            <?php
                    include 'dbconfig.php';
                    // Form a query to populate the combo-box
                        $query = "Show tables";
                    $result = mysql_query($query);
                    while ($row = mysql_fetch_array($result)){
                    // Add a new option to the combo-box
                        if(preg_match('/[0-9]/', $row[0]) && !preg_match('/[_]/', $row[0]))
                        echo "<option value='$row[0]'>$row[0]</option>";
                    // End the combo-box
                    }
           ?>
          </select>
          
      </td>
            
    </tr>
  
    <tr><td>
            <br/>
        <span id="txtHint" valign="top"></span></td></tr>
        <br/>
        <tr><td>
                <div id="tableDiv" style="visibility: hidden">
                    <center>
                        <div align="center"><span class="style2">Recently Updated Rows</span> </div>
                    </center></br></br>
      <table id="POITable" border="1">
        <tr>
            <th>Enrollment No.</th>
            <th>Branch</th>
            <th>Changes made</th>
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
            <td><input type="button" id="delButton" value="Delete Row" onclick="deleteRow()"/>
            <input type="button" id="addmoreButton" value="Add More Rows" onclick="insRow()"/></td>
        </tr>
    </table>
            <br/><br/>
</div>
            </td></tr>
        <br/><br/><br/>
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
