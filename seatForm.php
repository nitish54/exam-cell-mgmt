<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
?>
<html>
    <title>Exam Cell Portal</title>
    <head>
    
    </head>
    <?php   include 'mainheader.php';?> 
    <body>
        <div align="center">            
            <table width="1000" border="1">
                <tr><td bgcolor="#006699" width="40">
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
	font-size: 30px;
}
.style4 {font-size: 18px;
            font: bold;
}
-->
</style>
</head>
<script type="text/javascript">
    function freset()
    {
         document.getElementById("year").disabled=false;
          document.getElementById('table').style.visibility="hidden";
    }
function upperCase()
{
    var room= document.getElementById('txtRoom');
  var exclude= document.getElementById('txtExclude');
  exclude.value=exclude.value.toUpperCase();
  room.value=room.value.toUpperCase();
}
function showEnroll()
{
    var year= document.getElementById('year').value;
    document.getElementById('txtYear').value=year;
    if(year=="select"){
        alert("Enter year!!!");
        return;
    }
    document.getElementById('year').disabled=true;
    document.getElementById('table').style.visibility="visible";
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
    document.getElementById("txtEnrol").value=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getEnroll.php?year="+year,true);
xmlhttp.send();
}
function fvalid(){
var cap = document.getElementById('txtCapacity').value;
var year = document.getElementById('year').value;
var room = document.getElementById('txtRoom').value;

if(year=="select"){
    alert("Enter year!!!");
        return false;
}
if(capTest(cap)==false){
        document.getElementById('txtCapacity').value="";
        alert("Enter only numeric characters of max 2 digits in Room Capacity");
        return false;
}
if(room==""){
    alert("Enter the Room Numbers...");
        return false;
}

    function capTest(input){
        var CAP_EXPR = /^[0-9]{1,2}$/;
        return CAP_EXPR.test(input);
     }
}
function check()
{
    if(fvalid()==false) return;
    else{
var enroll = document.getElementById('txtEnrol').value;
var exclude = document.getElementById('txtExclude').value;
var cap = document.getElementById('txtCapacity').value;
var room = document.getElementById('txtRoom').value;
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
    document.getElementById("lbl").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkCapacity.php?cap="+cap+"&room="+room+"&enroll="+enroll+"&exclude="+exclude,true);
xmlhttp.send();
}
}
    </script>
    <body><br/><br/>
        <?php
        $msg=$_GET['msg'];
        if($msg!=null) echo "<center><font color='red' size='4'>$msg</font></center>";
        ?>
<div align="center"><form name="form" method="post" action="seatOperation.php" onsubmit="return fvalid();">
  <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr><td colspan="2" valign="top"><div valign="top"><span class="style2"><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seat Arrangement Form</span> </div><br/><br/><br/>
     </td></tr>
      <tr><td width="45%">
     <span class="style4">Choose Year  </span><span style="color:#FF0000">*</span></td>
     <td width="55%">
     <select name="year" id="year">
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
     <input type="button" value="  Submit  " onclick="showEnroll()"></input>
     </td></tr>
  </table><br/>
      <div id="table" style="visibility: hidden;">
          <table width="500" border="0" cellpadding="0" cellspacing="0">
      <tr><td width="45%">
      <span class="style4">Selected Enrollment Nos.  </span><span style="color:#FF0000">*</span></td>
     <td width="55%">
      <textarea runat="server" id="txtEnrol" name="txtEnrol" readonly="true" oncut="return false" oncopy="return false"></textarea>
     </td></tr> 
        <tr><td width="45%"><br/>
      <span class="style4">**Excluded Enrollment Nos.  </span><span style="color:#FF0000">*</span></td>
     <td width="55%"><br/>
          <textarea id="txtExclude" runat="server" name="txtExclude" onpaste="return false" onkeyup="upperCase()"></textarea>
     </td></tr>    
      <tr><td width="45%"><br/>
      <span class="style4">Class Seating Capacity  </span><span style="color:#FF0000">*</span></td>
     <td width="55%"><br/>
      <input type="text" id="txtCapacity" name="txtCapacity" autocomplete="off"/>
     </td></tr>  
      <tr><td width="45%">
      <span class="style4">**Enter Room Numbers  </span><span style="color:#FF0000">*</span></td>
     <td width="55%"><br/>
         <textarea id="txtRoom" name="txtRoom"  onkeyup="upperCase()"></textarea><div valign="middle"><input type="button" value="Check" onclick="check()"></input></div>
         <label id="lbl"></label>
     </td></tr> 
              <tr><td colspan="2">
                      <font color="blue" size="3"><br/><span style="color:black">**</span>Note: Separate using comma(,) eg. 0205CS081058,0205CS081059</font>
                  </td></tr>
  </table>   
          <input type="text" id="txtYear" name="txtYear" style="visibility: hidden"/>
         <br/><input type="submit" value="  Submit  "/><input type="button" value="  Reset  " onclick="freset()"/>
     </div>
    </form>
</div>
                    </td>
                
                <td bgcolor="#006699" width="40">
              </td>  
                    </tr>
            </table>  
        </div>
        
        
    </body>
    <?php   include 'footer.php';?>
    
    
</html>