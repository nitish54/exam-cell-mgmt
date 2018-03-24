<?php

session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');

if(isset($_GET["table"]))
$table= $_GET["table"];
else{
    $getvar[0] = $_POST["year"];
    $getvar[1] = $_POST["semester"];
    $getvar[2] = $_POST["txtSession"];
    $getvar[3] = $_POST["combo"];
    $table = implode("_", $getvar); 
}
$file1 = "upload/temporary.txt";
$file2 = "upload/mynewxls.xls";
if(file_exists($file1)) unlink($file1);
if(file_exists($file2)) unlink($file2);
$fp = fopen("upload/temporary.txt", 'a') or die('can\'t open file');
$line = "session,semester,branch,students appeared,passed,above 75%, bet 65 to 75%,bet 55 to 65%,bet 40 to 55%,below 40%,failed\n";
fwrite($fp,$line);
fclose($fp);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Analyser</title>
</head>
<script type="text/javascript">
function showUser(str)
{
    var table = document.getElementById("txtName").value;

if (str=="")
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
xmlhttp.open("GET","getResult.php?q="+str+"&name="+table,true);
xmlhttp.send();
}
</script>
    <style type="text/css">
<!--
table
{
    border-color:#006699;
    border-style:solid;
}

-->
</style>
<body>
      <?php   include 'mainheader.php'; ?> 

    <table border="1" width="1000" height="600">
                <tr>
                    <td valign="top" width="144"  bgcolor="#006699">
                      <?php   include 'lm_result.php'; ?>   
                        
                    </td>
                    <td valign="top">
                        <table width="690" border="0" cellpadding="0" cellspacing="0" valign="top" align="center">
    
      <tr>
     
    <input type="text" name ="txtName" id="txtName" value="<?php echo $table ?>" style="visibility : hidden;"></input>
      
     <td colspan="2" valign="top" align ="left"><font size="5">Enter Branch: </font> </td> 
      <td colspan="2" valign="top"><form id="form1" name="form1">
              
        <select name="select" onchange="showUser(this.value)">
          <option selected="selected">Select Branch</option>
          <option value="Computer Science and Engineering">Computer Science &amp; Engineering</option>
          <option value="Electronics and Communication Engineering">Electronics &amp; Communication Engineering</option>
          <option value="Electrical and Electronics Engineering">Electrical &amp; Electronics Engineering</option>
          <option value="Information Technology">Information Technology</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          </select>
      </form></td>
      <td height="50">&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
	<br /><tr><td colspan="5">
        <div id="txtHint"><b>                <font size="4">       Info will be listed here...</b><br/></div></td></tr>
        
  </table>
                    </td>
                    
                </tr>
                
            
            </table> 
    <?php   include 'footer.php'; ?>
        
     </body>
    
</html>
  
