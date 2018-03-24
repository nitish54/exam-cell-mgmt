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
.style4 {font-size: 18px}
-->
</style>
</head>
<script type="text/javascript">
function showUser(str)
{
if (str=="select")
  {
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
</script>
<body>
<div align="center">
  <table width="586" border="0" cellpadding="0" cellspacing="0">
 <div align="center"><span class="style2">View Student Info According to the Year</span> </div>
    <br/><br/>
     <span class="style4">Choose Year : </span>
       
          <select name="select" onchange="showUser(this.value)">
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
          
    <br/><br/><br/>
   
        <span id="txtHint" valign="top"></span>
        <br/><br/>
        
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
