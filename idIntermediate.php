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
<html>
    <head>
        
    </head>
    <script type="text/javascript">
function showUser(str){
    
 if (str=="")
  {
  document.getElementById("image").innerHTML="";
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
    document.getElementById("image").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","idCheck.php?id="+str,true);
    xmlhttp.send();
}
    </script>
    <body>
        <div align='center'>
            <br/><br/><br/>
            <form name="form" method='post' action='dummy.php' target="_blank">
                <font size='3'>Choose one of the Entries:   </font><select name='item'>
                    <option value="select">-- Select Item --</option>

                    <?php
                    include 'dbconfig.php';
                    $clicked = $_POST['checkbox'];
                    // Form a query to populate the combo-box
                    if ($clicked == "student")
                        $queryitem = "SELECT id FROM exam_cell.idcard WHERE id LIKE '0205%'";
                    if ($clicked == "teacher")
                        $queryitem = "SELECT id FROM exam_cell.idcard WHERE id NOT LIKE '0205%'";
                    $result = mysql_query($queryitem);
                    while ($row = mysql_fetch_array($result))
                    // Add a new option to the combo-box
                        echo "<option value='$row[0]'>$row[0]</option>";
                    // End the combo-box
                    ?>

                </select><br/><br/>
                <input type="text" value="<?php echo $clicked; ?>" name="who" style="visibility: hidden"/>
                <br/>
                <center>OR</center>
                    <br/><br/><br/>Enter the I.D./Enrl no. by Yourself: <input type="text" name="id" id="id" value="" onkeyup="showUser(this.value)" onchange="showUser(this.value)"/> 
                    <div id="image"></div>
                   
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