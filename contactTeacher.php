<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');

?>
<html>
    <title>Exam Cell Portal</title>
    <head>

    </head>
<?php include 'mainheader.php'; ?> 
    <body>
        <div align="center">            
            <table width="1000" border="1">
                <tr>
                    <td valign="top" width="144" bgcolor="#006699">
                        <?php include 'lm_contact.php'; ?>   
                    </td>
                    <td valign="top">
                        <html>                    
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
        xmlhttp.open("GET","teacherInfo.php?q="+str,true);
        xmlhttp.send();
    }
                    </script>
                    <style type="text/css">
       
    </style>
                    <body>       
                        <div align="center">
                                <font size="7" color="blue">View Teacher's Information</font><br/><br/><br/>
                                <font size="4"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Search Teacher's Info by Designation: </font>
                                <select name="txtdesign" id="txtdesign" onchange="showUser(this.value)">
                                    <option value="select">-- Select Item --</option>

                    <?php
                    include 'dbconfig.php';
                    // Form a query to populate the combo-box
                    $queryitem = "SELECT DISTINCT design FROM exam_cell.teachers";
                    $result = mysql_query($queryitem);
                    while ($row = mysql_fetch_array($result))
                    // Add a new option to the combo-box
                        echo "<option value='$row[0]'>$row[0]</option>";
                    // End the combo-box
                    ?>

                                </select>
                                </div>
                                 <br/><br/><br/>
   
        <span id="txtHint" valign="top"></span>
        <br/><br/>
                        </div>
                    </body>
                    </html>         
                        
                        </td>
                </tr>


            </table>  
        </div>
    </body>
    <?php include 'footer.php'; ?>

</html>

