<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>about us</title>
        <style type="text/css">
<!--

a {
	font-size: 16px;
	color: #FFFFFF;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0033FF;
}
a:hover {
	text-decoration: underline;
	color:blue;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
body {
	background-color: #E8DFE2;
}
.style1 {font-size: 24px}
-->
</style>
    </head>
    <?php   include  'mainheader.php';?> 
    <body>
        <div align="center">
        <table width="1000" border="1">
           <tr>
             
                   
            
                <td>
       <font face="cooper black" size="6" color="maroon" ><blink>ABOUT THE SOFTWARE</blink></font> <br><br>
      <font face="verdana" size="3">This software aims at reducing the tedious and cumbersome task at the examination cell. It will save a lot of time and moreover gives them with the security of the data. Data Security and integrity are some of the key features of the project.This project aims at solving the common problem that prevails during the examination cell. This software aims at reducing their complexity and eases the onerous task. It takes into account all the details of the students, teachers, and the various processes that take place during the examination and after the examination and it helps the officials to do the same work in a systemic and easy way.  <br><br>


       <a href="#a1"><font face="verdana" size="4" color="blue"><b>RESULT ANALYZER</b></font></a><br>
      <a href="#a2"><font face="verdana" size="4" color="blue"><b>ID CARD GENERATOR</b></font></a> <br>
      <a href="#a3"><font face="verdana" size="4" color="blue"><b>SEAT MANAGEMENT</b></font></a><br>
      <a href="#a4"><font face="verdana" size="4" color="blue"><b>STUDENT'S INFORMATION</b></font></a><br>
      <a href="#a5"><font face="verdana" size="4" color="blue"><b>TEACHER'S INFORMATION</b></font></a><br><br>
      
    <table height="50" width="1000" bgcolor="#006699"><tr><td> <a name="a1"><font face="cooper black" size="6" color="white" >RESULT ANALYZER</font></a></td></tr></table> <br><br>
     <font face="verdana" size="3">Result Analyzer is a only software of its type and as the name "RESULT ANALYZER" indicates, it analyzes the result and works for both, for the current grading system as well as for traditional system. Result analyzer analyzes the notifications that come from universities and separate out the 
     students on the basis of their grades and marks. In our software we provide separate tabs for <font color="blue">old scheme</font> and <font color="blue">new scheme</font>.Once the notifications are analysed, then there is no need to analyse them again and again. one can also see those results  by <font color="blue">Direct Analysis</font> tab. </font><br><br>
      
     <table height="50" width="1000" bgcolor="#006699"><tr><td> <a name="a2"><font face="cooper black" size="6" color="white" >ID CARD GENERATOR</font></a</td></tr></table> <br><br>
     <font face="verdana" size="3">ID Card generator is simply used for generating Id card for the students of the institution as well as for the teachers.But the speciality of this module is <font color="blue">Barcode</font> Every Id card will be generated with unique Barcode.For barcode generation we have used <font color="blue">Code 39 Barcode Generator.</font>This module also provides the facility of <font colo="blue">preview of Id card  </font> and <font color="blue" >Printout of Id card.</font> This module also provides <font color="blue">Duplicate Id card facility.</font><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                               Code 39 (also known as Alpha39, Code 3 of 9, Code 3/9, Type 39, USS Code 39, or USD-3) is a variable length, discrete barcode symbology.
The Code 39 specification defines 43 characters, consisting of uppercase letters (A through Z), numeric digits (0 through 9) and a number of special characters (-, ., $, /, +, %, and space). An additional character (denoted '*') is used for both start and stop delimiters. Each character is composed of nine elements: five bars and four spaces. Three of the nine elements in each character are wide (binary value 1), and six elements are narrow (binary value 0). The width ratio between narrow and wide can be chosen between 1:2 and 1:3.</font>
 <table height="50" width="1000" bgcolor="#006699"><tr><td> <a name="a3"><font face="cooper black" size="6" color="white" >SEAT MANAGEMENT</font></a></td></tr></table> <br><br>
     <font face="verdana" size="3">Seat Management module helps to prepare a format which indicates the seat arrangements for the students in the classes during exma time. This module will collect necessary information such as avilability of classes and benches and no. of students etc. and with the help of these informations it will show a table format of the arrangement. This module amazingly reduce the manual effort and eases the onerous task.   </font><br><br>
   <table height="50" width="1000" bgcolor="#006699"><tr><td> <a name="a4"><font face="cooper black" size="6" color="white" >STUDENT'S INFORMATION</font></a></td></tr></table> <br><br>
     <font face="verdana" size="3">This module gives all the information of students studying in any perticuler session.With this module, deletion of records and updation of records are also possible.   </font><br><br>  
   <table height="50" width="1000" bgcolor="#006699"><tr><td> <a name="a5"><font face="cooper black" size="6" color="white" >TEACHER'S INFORMATION</font></a></td></tr></table> <br><br>
     <font face="verdana" size="3">This module gives all the information of teachers who are giving their services to the institute, deletion of records and updation of records are also possible.   </font><br><br>  
    <table height="50" width="1000" bgcolor="#006699"><tr><td> <a name="a5"><font face="cooper black" size="6" color="white" >Contact via Email</font></a></td></tr></table> <br><br>
     <font face="verdana" size="3">With the help of this module we can send messages to teacher or student for any reason.  </font><br><br>  
     </td>
        
          </tr>
        </table></div>
     </body>
    <?php include 'footer.php'; ?>
</html>



