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
<link href="calendar/calendar.css" rel="stylesheet" type="text/css"/>
        <script src="calendar/calendar.js" type="text/javascript"></script>
        <script type="text/javascript">
            function init() {
                calendar.set("txtDob");
            }
        </script>
<script type="text/javascript">
function valid()
{
         if(document.forms["idform"]["fselect"].value=="Select")
            {
                alert("Enter Proper Validity");
                return false;
            }
        if(document.forms["idform"]["tselect"].value=="Select")
            {
                alert("Enter Proper Validity");
                return false;
            }
        if(document.forms["idform"]["txtId"].value=="")
            {
                alert("ID can not be empty");
                return false;
            }
        if(document.forms["idform"]["txtBranch"].value=="")
            {
                alert("Branch can not be empty");
                return false;
            } 
        if(document.forms["idform"]["txtName"].value=="")
            {
                alert("Name can not be empty");
                return false;
            }
        if(document.forms["idform"]["txtFname"].value=="")
            {
                alert("Father\'s Name can not be empty");
                return false;
            }
       
        if(document.forms["idform"]["txtDob"].value=="")
            {
                alert("Date of Birth field can not be empty");
                return false;
            }
             if(document.forms["idform"]["txtWork"].value=="")
            {
                alert("Designation field can not be empty");
                return false;
            }
            if(document.forms["idform"]["txtAdd1"].value=="")
            {
                alert("Address field canot be empty");
                return false;
            }
        if(document.forms["idform"]["txtContact"].value=="")
            {
                alert("Mobile no. can not be empty");
                return false;
            }
        if(document.forms["idform"]["txtImage"].value=="Choose Image")
            {
                alert("Upload a Photo");
                return false;
            }
         
      else return true;   
}
function showUser()
{
    var fselect = document.getElementById("fselect").value;
    var tselect = document.getElementById("tselect").value;
    var txtId = document.getElementById("txtId").value;
    var txtBranch = document.getElementById("txtBranch").value;
    var txtName = document.getElementById("txtName").value;
    var txtFname = document.getElementById("txtFname").value;
    var txtWork = document.getElementById("txtWork").value;
    var txtDob = document.getElementById("txtDob").value;
    var txtAdd1 = document.getElementById("txtAdd1").value;
    var txtAdd2 = document.getElementById("txtAdd2").value;
    var txtContact = document.getElementById("txtContact").value;
    var image = document.getElementById("txtImage").value;
    
    for (var i=0; i < document.idform.radio1.length; i++)
    {
        if (document.idform.radio1[i].checked)
    {
        var mainradio = document.idform.radio1[i].value;
    }
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
  if(mainradio == "student")
xmlhttp.open("GET","idPreviewStudent.php?fselect="+fselect+"&tselect="+tselect+"&name="+txtName+"&id="+txtId+"&branch="+txtBranch+"&fname="+txtFname+"&work="+txtWork+"&dob="+txtDob+"&add1="+txtAdd1+"&add2="+txtAdd2+"&contact="+txtContact+"&image="+image,true);
 if(mainradio == "teacher")
xmlhttp.open("GET","idPreviewTeacher.php?name="+txtName+"&id="+txtId+"&branch="+txtBranch+"&fname="+txtFname+"&work="+txtWork+"&dob="+txtDob+"&add1="+txtAdd1+"&add2="+txtAdd2+"&contact="+txtContact+"&image="+image,true);
xmlhttp.send();
}
    
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
        fselect.value="select";
        tselect.value="select";
        document.getElementById("txtId").value="";
        document.getElementById("txtBranch").value="";
        document.getElementById("txtName").value="";
        document.getElementById("txtFname").value="";
        document.getElementById("txtWork").value="";
        document.getElementById("txtDob").value="";
        document.getElementById("txtAdd1").value="";
        document.getElementById("txtAdd2").value="";
        document.getElementById("txtContact").value="";
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
        fselect.value="select";
        tselect.value="select";
        document.getElementById("txtId").value="";
        document.getElementById("txtBranch").value="";
        document.getElementById("txtName").value="";
        document.getElementById("txtFname").value="";
        document.getElementById("txtWork").value="";
        document.getElementById("txtDob").value="";
        document.getElementById("txtAdd1").value="";
        document.getElementById("txtAdd2").value="";
        document.getElementById("txtContact").value="";
        return true;
    }
    function popup()
    { 
        var id = document.getElementById('txtId').value;
        if(id==""){
            alert("Enter Identification number first..."); return;
        }
        window.open("popupImage.php?id="+id,'PopWin','width=500px, Height=450px,left=300px,top=140px,toolbar=no,menubar=no,location=0');
    }
    function upperCase()
{
    var id= document.getElementById('txtId');
    id.value=id.value.toUpperCase();
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

<body onload="init()">
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
        <td colspan="10" align="center">
            <?php 
            $msg = $_GET['msg'];
            if($msg!=null) echo '<font size="4" color="RED">'.$msg;
                ?>
        </td>
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
      <td colspan="4" valign="top"><form id="idform" name="idform" method="post" action="idSubmit.php" enctype="multipart/form-data">
      <input name="radio1" type="radio" id="radio1" value="student" style ="visibility : visible; " onclick="return StudentPage();" checked="checked">Student</input>

      </td>
      <td>&nbsp;</td>
      
      <td colspan="7" valign="top">
      <input name="radio1" type="radio" id="radio1" value="teacher" style ="visibility : visible; " onclick="return TeacherPage();">Teacher</input>
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
            <select name="fselect" id="fselect" style ="visibility : visible;">
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
          <select name="tselect" id="tselect" style ="visibility : visible;">
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
          <input type="text" name="txtId" id="txtId" onkeyup="upperCase()" onblur="upperCase()" />
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
          <input type="text" name="txtBranch" id="txtBranch"/>
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
          <input type="text" name="txtName" id="txtName"/>
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
          <input type="text" name="txtFname" id="txtFname" />
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
          <input type="text" name="txtWork" id="txtWork"/>
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
          <input type="text" name="txtDob" id="txtDob" />
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
      <td colspan="3" valign="top">Address Line 1</td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
            <input type="text" name="txtAdd1" id="txtAdd1" onfocus="calendar.hideCalendar();"/>
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
      <td colspan="3" valign="top">Address Line 2</td>
      <td valign="top">:</td>
      <td colspan="9" valign="top">
        <label>
          <input type="text" name="txtAdd2" id="txtAdd2" />
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
          <input type="text" name="txtContact" id="txtContact" />
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
            <a href="popupImage.php" onclick="popup();return false"><input type="text" value="Choose Image" name="txtImage" id="txtImage" style="opacity: 0.4;" readonly="true"/></a>
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
        <input type="button" name="btnpreview" value="  Preview  " onclick="showUser();" />
        </label>
      </td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">
        <label>
          <input type="submit" name="Submit2" value="  Submit  " onclick="return valid();"/>
          </label>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" valign="top">
        <label>
          <input type="reset" name="Submit3" value="  Reset  " />
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
	<br /><tr><td colspan="18">
        <div id="txtHint"><br/></div></td></tr>
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