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
                        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fill Required Entries</title>
<script type="text/javascript">
    function f_valid()
    {
        if(document.forms["form1"]["year"].value=="Select")
            {
                alert("Enter the Correct Year");
                return false;
            }
        if(document.forms["form1"]["semester"].value=="Select")
            {
                alert("Enter the Semester");
                return false;
            }
             if(document.forms["form1"]["combo"].value=="Enter SET")
            {
                alert("Enter SET");
                return false;
            }
      else return true;
    }

function fill(form1)
{
   
     if(form1.semester.value=="3"||form1.semester.value=="5"||form1.semester.value=="7")
        {   
            var combo = document.getElementById('combo');
            combo.style.visibility = "hidden";
            form1.txtSession.value="December";
            combo.options.length = 0;  
                        
        }
       if(form1.semester.value=="4"||form1.semester.value=="6"||form1.semester.value=="8")
        {   
            var combo = document.getElementById('combo');
            combo.style.visibility = "hidden";
            form1.txtSession.value="June";
            combo.options.length = 0;  
                        
        }
        if(form1.semester.value=="1"){
            var combo = document.getElementById('combo');
            combo.options.length = 0;
            combo.style.visibility = "visible";
            var option2 = document.createElement("option");
            option2.text = 'Enter SET';
            combo.add(option2,null);
            var option = document.createElement("option");
            option.text = 'set A';
            option.value = 'setA';
            combo.add(option,null);
            var option1 = document.createElement("option");
             option1.text = 'set B';
            option1.value = 'setB';
            combo.add(option1,null);
            form1.txtSession.value="December";
        }
     if(form1.semester.value=="2"){
            var combo = document.getElementById('combo');
            combo.options.length = 0; 
            combo.style.visibility = "visible";
             var option2 = document.createElement("option");
            option2.text = 'Enter SET';
            combo.add(option2,null);
            var option = document.createElement("option");
            option.text = 'set A';
            option.value = 'setA';
            combo.add(option,null);
            var option1 = document.createElement("option");
             option1.text = 'set B';
            option1.value = 'setB';
            combo.add(option1,null);
            form1.txtSession.value="June";
        }
     
    return true;
}

</script>
<style type="text/css">
<!--
.style3 {font-size: 14px}
.style4 {font-size: 18px}
.style5 {font-size: 30px}
-->
</style>
</head>

<body>
<div align="center">
  <table width="750" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->

    <tr>
      <td width="142" height="63">&nbsp;</td>
      <td width="107">&nbsp;</td>
      <td width="16">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td width="35">&nbsp;</td>
      <td width="112">&nbsp;</td>
      <td width="318">&nbsp;</td>
    </tr>
     <tr>
     
      <td colspan="10" align="left"><span class="style5"><font color="red">**Note: Enter Correct Entries to Delete Previous Record</span> </td>
      <td> </td>
      <td height="75"></td>
     </tr>
    <tr>
     
      <td colspan="10" align="center">
      <?php
     $msg = $_GET['msg'];
     if($msg!=null)
     {
         echo '<h3><font color = "blue">'.$msg.'</font></h3>';
     }
     ?>
      </td>
      <td height="25"></td>
     </tr>
    <tr>
      <td height="25"></td>
      
      <td colspan="2" valign="middle"><span class="style4">Academic Year</span> </td>
      <td></td>
      
      <td colspan="2" rowspan="2" valign="top">
          <form id="form1" name="form1" method="post" action="recordDeleted.php" onsubmit="return loadSubmit();" enctype="multipart/form-data">
        <select name="year">
          <option value="Select" selected="selected">Select</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
        </select>
         </td>
      <td></td>
    </tr>
    <tr>
      <td height="15"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
     
    
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="22">&nbsp;</td>
      <td colspan="2" align="left" valign="middle"><span class="style4">Semester</span></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">
        <select name="semester" onclick="fill(this.form)">
            <option value="Select" selected="selected">Select</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
        </select>
          <br><select name="combo" id="combo" style ="visibility : hidden; "></select></br>
        </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="27">&nbsp;</td>
      <td colspan="2" align="left" valign="middle"><span class="style4">Session</span></td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">
        <input type="text" name="txtSession" id="txtSession" readonly />
           </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">&nbsp;</td>
      
    </tr>
   
    
    <tr>
      <td height="30">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
     
      <td colspan="2" valign="top">
        <input name="Submit" type="submit" class="style4" value="Submit" onclick="return f_valid();"/>
        </td>
    </form>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="107">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
  </table>
</div>
</body>
</html>

                    </td>
                    
                </tr>
                
            
            </table> 
            <?php   include 'footer.php'; ?>
        </div>
     </body>
    
</html>