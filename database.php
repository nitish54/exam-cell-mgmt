<?php 
include 'dbconfig.php';
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
else {
    $username = $_SESSION['name'];
}
 $sql="Show tables";
 $result = mysql_query($sql);
?>
<html>
    <title>Exam Cell Portal</title>
    
    <?php   include 'mainheader.php';?> 
    <body>
        <div align="center" valign="top">            
            <table width="1000" border="1" valign="top">
                <tr>
                     <td valign="top" width="144" bgcolor="#006699">
                      <?php   include 'lm_database.php'; ?>                           
                    </td>
                    <td valign="top">
                        <div align="right"> Welcome <font  size="4" color="blue"><?php echo $username ?></font></div>
                       <hr size="3" color="#006699"/>  <div valign="top">
                <center><font size="8" color="#006699">Existing Tables in the Database</font>
                    <br/><br/>
                    <table border='1' width='200' valign='top'>
                    <tr><th>Name of Existing Tables</th></tr>
              <?php 
                   while ($row = mysql_fetch_array($result))
                   {
                       if(preg_match('/[0-9]/', $row[0]))
                       echo "<tr><td><center>".$row[0]."</td></tr>";
                   }
                   
                ?>
                    </table>
                    <br/><br/>
                    <a href="home.php"><input type="button" value="  -- OK --  " style="font-size: 25; color: Blue"/></font></a>
                    </center></div>
                    </td>
                 </tr>
                
            
            </table>  
        </div>
        
        
    </body>
    <?php   include 'footer.php';?>
    
</html>