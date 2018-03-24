<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
else {
    $username = $_SESSION['name'];
}
include 'dbconfig.php';
$sql="SELECT * FROM exam_cell.profile WHERE username = '".$username."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
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
                   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 17px;
}
-->
</style>
</head>
<script type="text/javascript">
    function func()
    {
        var result = /^([0-9]{4}[-][0-9]{2}[-][0-9]{2})$/;
        if(document.forms["form1"]["txtname"].value=="")
            {
                alert("Name can not be empty");
                return false;
            }
        if(document.forms["form1"]["txtdob"].value=="")
            {
                alert("Date of Birth field can not be empty");
                return false;
            }
             if(document.forms["form1"]["txtdesign"].value=="")
            {
                alert("Designation field can not be empty");
                return false;
            }
            if(document.forms["form1"]["txtadd"].value=="")
            {
                alert("Address field canot be empty");
                return false;
            }
        if(document.forms["form1"]["txtmob"].value=="")
            {
                alert("Mobile no. can not be empty");
                return false;
            }
             if(document.forms["form1"]["txtemail"].value=="")
            {
                alert("Email ID can not be empty");
                return false;
            }
         if(result.test(document.forms["form1"]["txtdob"].value)==false){
                 alert("Improper Data");
                return false; 
       }
      else return true;
    }
    
    function f_empty(){
        document.forms["form1"]["txtname"].value="";
        document.forms["form1"]["txtdesign"].value="";
        document.forms["form1"]["txtdob"].value="";
        document.forms["form1"]["txtadd"].value="";
        document.forms["form1"]["txtmob"].value="";
        document.forms["form1"]["txtemail"].value="";
        
    }
 </script>
<body>
<div align="center">
  <table width="654" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="5" height="30">&nbsp;</td>
      <td width="137">&nbsp;</td>
      <td width="9">&nbsp;</td>
      <td width="51">&nbsp;</td>
      <td width="46">&nbsp;</td>
      <td width="22">&nbsp;</td>
      <td width="22">&nbsp;</td>
      <td width="19">&nbsp;</td>
      <td width="76">&nbsp;</td>
      <td width="103">&nbsp;</td>
      <td width="54">&nbsp;</td>
      <td width="32">&nbsp;</td>
      <td width="6">&nbsp;</td>
      <td width="72">&nbsp;</td>
    </tr>
    <tr>
      <td height="44">&nbsp;</td>
      <td rowspan="6" valign="top"><form id="form1" name="form1" method="post" action="profileEntry.php" enctype="multipart/form-data" >
        <label>
          <img src="photoviewer.php" width="130" height="170"/>
          </label>
      </td>
      <td>&nbsp;</td>
      <td colspan="9" valign="top"><span class="style1">Admin Profile </span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="51">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td colspan="2" valign="top">Username</td>
      <td>&nbsp;</td>
      <td colspan="5" valign="top">
        <label>
          <input type="text" name="textfield" value="<?php echo $username?>" readonly/>
          </label>
           </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="21"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td colspan="2" valign="top">Name</td>
      <td></td>
      <td colspan="5" valign="top">
        <label>
          <input type="text" name="txtname" id="txtname" value="<?php echo $row[1] ?>"/>
          </label>
         </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="27"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="2"></td>
      <td></td>
      <td></td>
      <td colspan="2" rowspan="2" valign="top">Date of Birth</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="20"></td>
      <td></td>
      <td></td>
      <td></td>
      <td colspan="5" rowspan="2" valign="top">
        <label>
          <input type="text" name="txtdob" id="txtdob" value="<?php echo $row[3] ?>"/>
         &nbsp;yyyy-mm-dd </label>
         </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="17"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Designation</td>
      <td></td>
      <td colspan="5" valign="top">
        <label>
          <input type="text" name="txtdesign" id="txtdesign" value="<?php echo $row[2] ?>"/>
          </label>
        </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="20"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="35"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Address</td>
      <td></td>
      <td colspan="5" valign="top">
        <label>
          <textarea name="txtadd" value=""><?php echo $row[4] ?></textarea>
          </label>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="17"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Mobile No.</td>
      <td></td>
      <td colspan="5" valign="top">
        <label>
          <input type="text" name="txtmob" id="txtmob" value="<?php echo $row[5] ?>"/>
          </label>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="17"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Email ID </td>
      <td></td>
      <td colspan="7" valign="top">
        <label>
          <input name="txtemail" id="txtemail"type="text" size="35" value="<?php echo $row[6] ?>"/>
          </label>
    </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="20"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="25"></td>
      <td></td>
      <td></td>
      <td colspan="2" valign="top">Change Photo </td>
      <td></td>
      <td colspan="4" valign="top">
        <label>
          <input type="file" name="file" />
          </label>
          </td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="35"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td colspan="3" valign="top">
        <label>
            <input class="style2" name="btnsubmit" type="submit" id="submit" value="   Submit    " onclick="return func();"/>
          </label>
      </td>
      <td>&nbsp;</td>
      <td valign="top">
        <label>
          <input class="style2" name="btnreset" type="reset" id="reset" value="Reset to Original" />
          </label>
     </td>
      
      <td valign="top" align="right">
        <label>
          <input class="style2" name="btnempty" type="button" id="reset" value="Empty fields" onclick="return f_empty();" />
          </label>
          </form></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    
    <tr>
      <td height="118"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
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