<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');

?>
<html>
    <title>Exam Cell Portal</title>
    <head> </head>
    <?php   include 'mainheader.php';?> 
    <body>
        <div align="center">            
            <table width="1000" border="1">
                <tr>
                     <td valign="top" width="144" bgcolor="#006699">
                      <?php   include 'lm_idform.php'; ?>   
                        
                    </td>
                    <td valign="top">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
    <div align="center">
        <br/><br/>
        <form name="form" method='post' action='idIntermediate.php'>
        <font size="4" color="Black"><h2>Create Duplicate I.D. Card</h2></font>
        <?php
        $msg = $_GET['msg'];
        if($msg != null) echo "<font size='3' color='red'>".$msg.'</font>';?>
        <br/><br/>
        <font size="4" color="blue">
     Check the Required Entry Type: 
     <input name="checkbox" type="checkbox" value="student">
          Student</input>
            
     <input name="checkbox" type="checkbox" value="teacher">
          Teacher</input>
	<br/></font>
        <br/><br/><center><input type = 'submit' value=' Submit '/> <input type='reset' value=' Reset '/> </center>
                        </form>
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