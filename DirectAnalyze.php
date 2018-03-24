<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
?>
<html>
    <title>Exam Cell Portal</title>
    <body>
        <?php   include 'mainheader.php'; ?> 
        <div align="center">
            <table border="1" width="1000" align="center">
                <tr>
                    <td valign="top" width="144"  bgcolor="#006699">
                      <?php   include 'lm_result.php'; ?>   
                        
                    </td>
                    <td>
                        <?php   include 'directAnalysis.php'; ?>
                    </td>
                    
                </tr>
                
            
            </table> 
            <?php   include 'footer.php'; ?>
        </div>
     </body>
    
</html>