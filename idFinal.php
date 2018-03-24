<?php
//session_start();
//if(!isset($_SESSION['name']))
//    header('location: login.php');

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
                     <td rowspan="2" valign="top" width="144" bgcolor="#006699">
                      <?php   include 'lm_idform.php'; ?>   
                        
                    </td>
                    <td>
                         <?php   include 'idSubmit.php'; ?>   
                      </td>
                </tr>
                
            
            </table>  
        </div>
        
        
    </body>
    <?php   include 'footer.php';?>
    
</html>