<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
       
    </head>
    <?php include 'mainheader.php';?>
    <body>
        <div align="center">
     <table width="1000" border="1">
      
         <tr><td>
               <font face="verdana" size="6"><center>Feel free to Contact us!!!!!! </center></font>
               
               <br><br>
               <div align="center">
    <table border="0" cellpadding="0" cellspacing="0" style="border-radius: 20px" width="800" height="200" bgcolor="#008FB2">
      <tr><td colspan="4" rowspan="6" align="center">   
              <img src="images/Nitishphoto.jpg" height="150" width="150" align="center" style="border-radius: 20px" border="2" bordercolor="black">
            
              </td>
              </tr>
              <tr>
                  <td rowspan="5" align="center">
                      <font face="verdana" size="4" color="maroon">Name: Nitish Kumar Sinha</font><br><br>
                         <font face="verdana" size="4" color="maroon">Contact No: +919907529269</font><br><br>
                           <?php echo "<font face='verdana' size='4' color='maroon'>Email-Id:&nbsp;&nbsp;</font>" .  "<a href='contactForm.php?to=54nitish@gmail.com'> <font face='verdana' size='5' style='background-color:#ccc; border-radius:20px'><u><i>54nitish@gmail.com</i></u></font> </a></i>"   
          ?>  </td></tr>
              </table><br><br>
             
              <table border="0" cellpadding="0" cellspacing="0" style="border-radius: 20px" width="800" height="200" bgcolor="#008FB2">
     
              <tr>
                  <td rowspan="5" align="center">
                      <font face="verdana" size="4" color="maroon">Name: Akanksha Soni</font><br><br>
                         <font face="verdana" size="4" color="maroon">Contact No: +919691444304</font><br><br>
                    <?php echo "<font face='verdana' size='4' color='maroon'>Email-Id:&nbsp;&nbsp;</font>" .  "<a href='contactForm.php?to=soni.akanksha08@gmail.com'> <font face='verdana' size='5' style='background-color:#ccc; border-radius:20px'><u><i>soni.akanksha08@gmail.com</i></u></font> </a></i>"   
          ?>  </td></tr>    
                                <tr><td colspan="4" rowspan="6" align="center">   
              <img src="images/Akanksha.jpg" height="150" width="150" align="center" style="border-radius: 20px" border="2" bordercolor="black">
            
              </td>
              </tr>
              </table><br><br>
                   
              <table border="0" cellpadding="0" cellspacing="0" style="border-radius: 20px" width="800" height="200" bgcolor="#008FB2">
      <tr><td colspan="4" rowspan="6" align="center">   
              <img src="images/blank_profile.jpg" height="150" width="150" align="center" style="border-radius: 20px" border="2" bordercolor="black">
            
              </td>
              </tr>
              <tr>
                  <td rowspan="5" align="center">
                      <font face="verdana" size="4" color="maroon">Name: Manjari Nema</font><br><br>
                         <font face="verdana" size="4" color="maroon">Contact No: +919630659917</font><br><br>
                          <?php echo "<font face='verdana' size='4' color='maroon'>Email-Id:&nbsp;&nbsp;</font>" .  "<a href='contactForm.php?to=maninema18@gmail.com'> <font face='verdana' size='5' style='background-color:#ccc; border-radius:20px'><u><i>maninema18@gmail.com</i></u></font> </a></i>"   
          ?>  
              </table>
               
              </td>
              </tr>
     </table>
            </div>
    </body>
    <?php include 'footer.php';?>
</html>
