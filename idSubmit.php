<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
include "dbconfig.php";
$fselect=$_POST["fselect"];
$tselect=$_POST["tselect"];
$id=$_POST["txtId"];
$id = strtoupper($id);
$sql1 = "select id from exam_cell.idcard where id = '$id'";
$result = mysql_query($sql1);
$row = mysql_fetch_array($result);
if($row[0])
{
    header('location: idForm.php?msg=ID card already exists.');
    die();
}
else{
if($fselect=="select" && $tselect=="select"){
    $fselect=0;
    $tselect=0;
}
$name=$_POST["txtName"];
$branch=$_POST["txtBranch"];
$fname=$_POST["txtFname"];
$work=$_POST["txtWork"];
$dob=$_POST["txtDob"];
$add1=$_POST["txtAdd1"];
$add2=$_POST["txtAdd2"];
$phone=$_POST["txtContact"];
$main = $_POST['radio1'];
$cardno = date("dmYHis");
$gotimage = $_POST['txtImage'];
$image = "idphoto/".$gotimage;
require 'include/Barcode39.php';
$bc = new Barcode39($id); 
// display new barcode 
$bc->draw("barcodes/$id.gif");
$barcode = "barcodes/$id.gif";
//echo $id,$name,$fname,$work,$branch,$dob,$add1,$add2,$phone,$fselect,$tselect,$image,$barcode,$cardno;
dbentry($id,$name,$fname,$work,$branch,$dob,$add1,$add2,$phone,$fselect,$tselect,$image,$barcode,$cardno,$main);
}
 
 function dbentry($id,$name,$fname,$work,$branch,$dob,$add1,$add2,$phone,$fselect,$tselect,$image,$barcode,$cardno,$main){
     $sql="INSERT INTO exam_cell.idcard values ('".$id."','".$name."','".$fname."','".$work."','".$branch."','".$dob."','".$add1."','".$add2."',$phone,$fselect,$tselect,'".$image."','".$barcode."','".$cardno."','".$main."')";     
        mysql_query($sql)or die('Bad Query at 12');
        //echo "entered";
 }
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
<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ID CARD
</title>
<script type="text/javascript">

function load()
{
        var main =   document.getElementById('mainradio').value;
        var label1 = document.getElementById('label1');
        var label2 = document.getElementById('label2');
        var label3 = document.getElementById('label3');
        var label4 = document.getElementById('label4');
        var label5 = document.getElementById('label5');
						
	if (main == "teacher")  
	{
		label1.innerText = "I.D.";
                label2.innerText = "Designation";
                label3.innerText = "Department";
                label4.innerText = "";
                label5.innerText = "";
	}
	
	if (main == "student") 
	{
		label1.innerText = "Enrl no.";
                label2.innerText = "Course";
                label3.innerText = "Branch";
                label4.innerText = "Validity";
                label5.innerText = ":";
	}				
}

</script>
</script>
</head>

<body onload="load()">
<div align="center">
    <table width="791" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="14" height="97">&nbsp;</td>
      <td width="355">&nbsp;</td>
      <td width="17">&nbsp;</td>
      <td width="355">&nbsp;</td>
      <td width="55">&nbsp;</td>
    </tr>
    <tr>
      <td height="5">&nbsp;</td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-image: url('images/logo.jpg'); background-repeat:no-repeat;
background-position:center; opacity:0.8; 
filter:alpha(opacity=80); background-color: #39ACE6; border-radius: 20px" >
        <!--DWLayoutTable-->
        <tr>
          <td height="50" colspan="7" valign="top">
            <label>
              <input type="image" name="imageField2" src="images/cover.jpg" width="355" height="50" style="border-top-left-radius: 20px; border-top-right-radius: 20px;"/>
              </label>
          </td>
          </tr>
        <tr>
          <td height="26" colspan="3" align="center" valign="top"><?php echo '<font size="3"><u><b>'.strtoupper($name)?></td>
            <td width="9">&nbsp;</td>
            <td width="50" valign="top"><label id="label1">Enrl no. </label></td>
            <td colspan="3" align="center" valign="top"><?php echo '<font size="3"><b>'.strtoupper($id)?></td>
          </tr>
        <tr>
          <td width="65" height="19" align="center" valign="top"> S/D/W of </td>
            <td width="9">:</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$fname?></td>
            <td width="10"></td>
            <td rowspan="6" valign="top">
              <label>
                <input type="image" name="imageField" src="<?php echo $image?>" height="120" width=90"/>
                </label>
            
            </td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top"> <label id="label2">Course</label></td>
          <td>:</td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$work?></td>
          <td></td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top"> <label id="label3">Branch</label></td>
          <td>:</td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$branch?></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Address</td>
          <td>:</td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$add1?></td>
          <td></td>
          </tr>
        <tr>
          <td height="19"></td>
          <td></td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$add2?></td>
          
          </tr>

       
        <tr>
          <td height="19" align="center" valign="top">DOB</td>
            <td>:</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$dob?></td>
            <td></td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Phone</td>
          <td>:</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$phone?></td>
            <td></td>
          </tr>
        <tr>
          <td height="21" align="center" valign="top">Card No. </td>
            <td>:</td>
            <td colspan="3" align="left" valign="top"><?php echo $cardno ?></td>
          </tr>
        
            <tr>
                <td height="19" align="center" valign="top"><label id="label4">Validity</label></td>
          <td><label id="label5">:</label></td>
          <td colspan="3" align="left" valign="top"><?php if($fselect != "select" && tselect != "select") echo '<font size="3">'.'From '.$fselect.' to '.$tselect?></td>
          <td colspan="2" align="center" valign="top">Principal's sign </td>
          </tr>
        <tr>
          <td height="0"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td height="1"></td>
          <td></td>
          <td width="108"></td>
          <td></td>
          <td width="40"></td>
          <td></td>
          <td></td>
          </tr>
        
        
        
        
        
        
        
        
        
      </table></td>
      <td>&nbsp;</td>
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="opacity:0.8;
filter:alpha(opacity=80); background-color: whitesmoke; border-radius: 20px">
        <!--DWLayoutTable-->
         <tr>
          <td width="38" height="87">&nbsp;</td>
          <td width="281">&nbsp;</td>
          <td width="36">&nbsp;</td>
        </tr>
        <tr>
          <td height="85">&nbsp;</td>
          <td valign="top"><label>
                <input type="image" name="imageField" src="barcodes/<?php echo $id?>.gif" alt="barcode" height="85" width="281"/>
                </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="86">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30">&nbsp;</td>
      <td> <input type="text" name="mainradio" id="mainradio" value="<?php echo $main ?>" style="visibility: hidden"/> </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    
    <tr><td colspan="7">
            <div align="center">
            <a target="_blank" href="dummy.php?who=<?php echo $main?>&id=<?php echo $id?>">
                <input type="submit" value="    Print    " style="font-size: 25; color: Blue"></input>
            </a></div>
        </td></tr>
    
    
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
