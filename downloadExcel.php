<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
?>
<html>
    <title>Exam Cell Portal</title>
    <head>
    <style type="text/css">
<!--
table
{
    border-color:#006699;
    border-style:solid;
}
.style5 {font-size: 48px}
-->
</style>
    </head>
    <body>
        <?php   include 'mainheader.php'; ?> 
        <div align="center">
            <table border="2" width="1000" height="100%" align="center">
                <tr>
                    <td valign="top" width="144" bgcolor="#006699">
                      <?php   include 'lm_result.php'; ?>   
                        
                    </td>
                    <td>
                        <table border="0" align="center" valign="top">
                          <tr>
     
      <td colspan="6" valign="top" align="center"><span class="style5"><font color="BLACK">**Download Excel report**</span> </td>
      <td> </td>
      <td height="105"></td>
     </tr>
          <tr>
     
      <td colspan="11" align="center"><span class="style5"><font color="black"><a href="upload/mynewxls.xls" ><img src="images/download.jpg" width="130" height="130"/></a></span> </td>
      <td> </td>
      <td height="105"></td>
     </tr>
                        </table>
                        <?php   ?>
                    </td>
                    
                </tr>
            </table> 
            <?php   include 'footer.php'; ?> 
        </div>
     </body>
    
</html>