<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
else {
    $username = $_SESSION['name'];
}
include 'dbconfig.php';
$sql="SELECT username FROM exam_cell.profile WHERE username = '".$username."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if($row[0]==null){
    header('location: register.php');
}
?>


<html>
    <title>Exam Cell Portal</title>
    <head>
    
    </head>
    <?php   include 'mainheader.php';?> 
    <body>
        <div align="center">            
            <table width="1000" border="1">
                <tr>
                     <td valign="top" width="144" bgcolor="#006699">
                      <?php   include 'lm_home.php'; ?>   
                        
                    </td>
                    <td>
                    <?php   include 'profile.php';?>
                    </td>
                </tr>
                
            
            </table>  
        </div>
        
        
    </body>
    <?php   include 'footer.php';?>
    
</html>