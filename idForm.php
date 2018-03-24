<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');

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
                      <?php   include 'lm_idform.php'; ?>   
                        
                    </td>
                    <td>
           <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ID Card Form</title>
<script type="text/javascript">
    function StudentPage()
    {
        var label3 = document.getElementById('label3');
        var label4 = document.getElementById('label4');
        var label5 = document.getElementById('label5');
        var label6 = document.getElementById('label6');
        var label7 = document.getElementById('label7');
        var label8 = document.getElementById('label8');
        var label9 = document.getElementById('label9');
        var fselect = document.getElementById('fselect');
        var tselect = document.getElementById('tselect');
        label3.style.visibility = "visible";
        label4.style.visibility = "visible";
        label5.style.visibility = "visible";
        label6.style.visibility = "visible";
        fselect.style.visibility = "visible";
        tselect.style.visibility = "visible";
        label7.innerText = "Enrollment No.";
        label8.innerText = "Bona fide Student";
        label9.innerText = "Branch";
            return true;
    }
     function TeacherPage()
    {
        var label3 = document.getElementById('label3');
        var label4 = document.getElementById('label4');
        var label5 = document.getElementById('label5');
        var label6 = document.getElementById('label6');
        var label7 = document.getElementById('label7');
        var label8 = document.getElementById('label8');
        var label9 = document.getElementById('label9');
        var fselect = document.getElementById('fselect');
        var tselect = document.getElementById('tselect');
        label3.style.visibility = "hidden";
        label4.style.visibility = "hidden";
        label5.style.visibility = "hidden";
        label6.style.visibility = "hidden";
        fselect.style.visibility = "hidden";
        tselect.style.visibility = "hidden";
        label7.innerText = "Employee No.";
        label8.innerText = "Designation";
        label9.innerText = "Department";
        return true;
    }
</script>
<style type="text/css">
<!--
.style3 {
	font-size: 45px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="790" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="114" height="55">&nbsp;</td>
      <td width="86">&nbsp;</td>
      <td width="26">&nbsp;</td>
      <td width="24">&nbsp;</td>
      <td width="84">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td width="25">&nbsp;</td>
      <td width="49">&nbsp;</td>
      <td width="4">&nbsp;</td>
      <td width="21">&nbsp;</td>
      <td width="46">&nbsp;</td>
      <td width="20">&nbsp;</td>
      <td width="13">&nbsp;</td>
      <td width="56">&nbsp;</td>
      <td width="11">&nbsp;</td>
      <td width="23">&nbsp;</td>
      <td width="37">&nbsp;</td>
      <td width="33">&nbsp;</td>
      <td width="98">&nbsp;</td>
    </tr>
    <tr>
      <td height="63">&nbsp;</td>
      <td colspan="17" valign="top"><span class="style3">Fill Required Entries </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="10"></td>
      <td></td>
            <td></td>
    </tr>
    <tr>
      <td height="24"></td>
      <td>&nbsp;</td>
      <td colspan="4" valign="top"><form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
      <input name="radio1" type="radio" style ="visibility : visible; " onclick="return StudentPage();">Student</input>

      </td>
      <td>&nbsp;</td>
      
      <td colspan="7" valign="top">
      <input name="radio1" type="radio" style ="visibility : visible; " onclick="return TeacherPage();">Teacher</input>
      </td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
        <td height="5"></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><label id="label3" style ="visibility : visible;">Validity</label></td>
      <td valign="top"><label id="label4" style ="visibility : visible;">:</label></td>
      <td valign="top"><label id="label5" style ="visibility : visible;">From</label></td>
      <td>&nbsp;</td>
      <td colspan="2" rowspan="2" valign="top">
          <label>
            <select name="select" id="fselect" style ="visibility : visible;">
              <option value="select">Select</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select>
          </label>
      </td>
      <td colspan="2" valign="top"> <div align="center"><label id="label6" style ="visibility : visible;">to</label></div></td>
      <td valign="top">
        <label>
          <select name="select2" id="tselect" style ="visibility : visible;">
            <option value="select">Select</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
          </select>
          </label>
     </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td height="3"></td>
 
    </tr>

    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><label id="label7" style ="visibility : visible;">Enrollment No.</label> </td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="textfield2" />
          </label>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><label id="label9" style ="visibility : visible;">Branch </label></td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="textfield2" />
          </label>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top">Name</td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="textfield" />
          </label>
       </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top">Father's Name </td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="textfield3" />
          </label>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top"><label id="label8" style ="visibility : visible;">Bona fide Student</label> </td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="textfield4" />
          </label>
          </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top">Date of Birth </td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="textfield5" />
          </label>
         </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td height="35"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top">Address</td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <textarea name="textarea"></textarea>
          </label>
         </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
    <tr>
      <td height="22"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top">Contact No. </td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="textfield6" />
          </label>
        </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
      <td height="23"></td>
      <td></td>
      <td></td>
      <td colspan="3" valign="top">Upload Photo </td>
      <td valign="top">:</td>
      <td colspan="8" rowspan="2" valign="top">
        <label>
          <input type="file" name="file" />
          </label>
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
    <tr>
      <td height="21"></td>
      <td></td>
      <td></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
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
      <td valign="top">
        <label>
        <input type="submit" name="Submit" value="  Preview  " />
        </label>
      </td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">
        <label>
          <input type="submit" name="Submit2" value="  Submit  " />
          </label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">
        <label>
          <input type="submit" name="Submit3" value="  Reset  " />
          </label>
          </form></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
    
    <tr>
      <td height="150"></td>
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