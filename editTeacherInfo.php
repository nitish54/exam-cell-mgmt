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
                      <?php   include 'lm_contact.php'; ?>                           
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
div.scroll {
            height: 700px;
            width: 700px;
            overflow: auto;
            border: 1px solid #666;
            background-color: #ccc;
            vertical-align: top;
        }
-->
</style>
</head>
<script type="text/javascript">
    function emailTest(input){
     var EMAIL_EXPR = /^[a-z0-9\.\_]{4,25}[@][a-z]{3,10}[.][a-z]{2,3}$/;
     return EMAIL_EXPR.test(input);
  }  
     function deleteRow()
{ 
    var name= document.getElementById('txtname').value;
      var dept= document.getElementById('txtdept').value;
      var design= document.getElementById('txtdesign').value;
      var email= document.getElementById('txtemail').value;
       if(name=="" || dept=="" || design=="" || email=="")
        { 
        alert("Fill Required entries!!!");
        return;
        }
        if(emailTest(email)==false){
            alert("Enter proper Email Id");
            return false;
        }
    var x=document.getElementById('POITable').insertRow(1);
    var c1=x.insertCell(0);
    var c2=x.insertCell(1);
    var c3=x.insertCell(2); 
    var c4=x.insertCell(3);
    var c5=x.insertCell(4);
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
   c1.innerHTML=name;
    c2.innerHTML=dept;
    c3.innerHTML=design;
    c4.innerHTML=email;
    c5.innerHTML=xmlhttp.responseText;
    document.getElementById('txtname').value="";
    document.getElementById('txtdept').value="";
    document.getElementById('txtdesign').value="";
    document.getElementById('txtemail').value="";
    }
  }
xmlhttp.open("GET","updateTeachers.php?name="+name+"&dept="+dept+"&design="+design+"&email="+email+"&mode=delete",true);
xmlhttp.send();
}


function insRow()
{
     var name= document.getElementById('txtname').value;
      var dept= document.getElementById('txtdept').value;
      var design= document.getElementById('txtdesign').value;
      var email= document.getElementById('txtemail').value;
       if(name=="" || dept=="" || design=="" || email=="")
        { 
        alert("Fill Required entries!!!");
        return;
        }
        if(emailTest(email)==false){
            alert("Enter proper Email Id");
            return false;
        }
    var x=document.getElementById('POITable').insertRow(1);
    var c1=x.insertCell(0);
    var c2=x.insertCell(1);
    var c3=x.insertCell(2); 
    var c4=x.insertCell(3);
    var c5=x.insertCell(4);
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
   c1.innerHTML=name;
    c2.innerHTML=dept;
    c3.innerHTML=design;
    c4.innerHTML=email;
    c5.innerHTML=xmlhttp.responseText;
    document.getElementById('txtname').value="";
    document.getElementById('txtdept').value="";
    document.getElementById('txtdesign').value="";
    document.getElementById('txtemail').value="";
    }
  }
xmlhttp.open("GET","updateTeachers.php?name="+name+"&dept="+dept+"&design="+design+"&email="+email+"&mode=insert",true);
xmlhttp.send();
}
</script>
<body>
<div align="center">
  <table width="586" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td valign="top" align="center"><span class="style4">Teacher's Details at a glance</span>
      </td>
    </tr>
  
    <tr><td>
        <div class="scroll">
            <br/><br/><font size="4"><div align="left">
                <?php
                include 'dbconfig.php';               
                $query = "SELECT * FROM exam_cell.teachers";
                $result = mysql_query($query);
                while ($row = mysql_fetch_array($result)) {
                    echo "<br/>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;" . $row[0];
                    echo "<br/>Department&nbsp;&nbsp;:&nbsp;" . $row[1];
                    echo "<br/>Designation&nbsp;&nbsp;:&nbsp;" . $row[2];
                    echo "<br/>Email Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;" . "<u><i><a href='contactForm.php?to=$row[3]'>".$row[3]."</a></i></u>";
                    echo "<br/><br/>";
                }
               
                ?>
            </div>
            </font>
        </div>    
        </td></tr>
        <br/>
        <tr><td>
                <div id="tableDiv" style="visibility: visible">
                    <center>
                        <div align="center"><span class="style2">Add or Delete details</span> </div>
                    </center></br></br>
      <table id="POITable" border="1">
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Email Id</th>
            <th>Changes made</th>
        </tr>
        <tr>
            <td><input type="text" id="txtname" name="txtname"/></td>
            <td><input type="text" id="txtdept" name="txtdept"/></td>
            <td><input type="text" id="txtdesign" name="txtdesign"/></td>
            <td><input type="text" id="txtemail" name="txtemail"/></td>
            <td><input type="button" id="addmoreButton" value="Add More Rows" onclick="insRow()"/>
                <input type="button" id="delButton" value="Delete Row" onclick="deleteRow()"/>
            </td>
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
