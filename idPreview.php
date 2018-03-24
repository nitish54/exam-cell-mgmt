<?php
$fselect=$_GET["fselect"];
$tselect=$_GET["tselect"];
$id=$_GET["id"];
$name=$_GET["name"];
$branch=$_GET["branch"];
$fname=$_GET["fname"];
$work=$_GET["work"];
$dob=$_GET["dob"];
$add1=$_GET["add1"];
$add2=$_GET["add2"];
$contact=$_GET["contact"];
$img = $_GET['img'];
// if (($_FILES["file"]["type"] == "image/jpg") && ($_FILES["file"]["size"] < 2000000)) {
//        if ($_FILES["file"]["error"] > 0) {
//            die("Return Code: " . $_FILES["file"]["error"] . "<br />");
//        } else {
//            if (file_exists("upload/" . $_FILES["file"]["name"])) {
//                
//                //echo "File already exists.";
//                
//           } else {
//                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
//                // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
//            }
//        }
//    } else {
//        echo "Invalid file";
//        die();
//    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Preview</title>
</head>

<body>
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
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #6598CC; border-radius: 20px">
        <!--DWLayoutTable-->
        <tr>
          <td height="50" colspan="7" valign="top">
            <label>
              <input type="image" name="imageField2" src="images/cover.jpg" width="355" height="50" style="border-top-left-radius: 20px; border-top-right-radius: 20px;"/>
              </label>
          </td>
          </tr>
        <tr>
          <td height="26" colspan="3" align="center" valign="top"><?php echo '<font size="3">'.strtoupper($name)?></td>
            <td width="9">&nbsp;</td>
            <td width="50" valign="top">Enrl no. </td>
            <td colspan="3" align="center" valign="top"><?php echo '<font size="3">'.strtoupper($id)?></td>
          </tr>
        <tr>
          <td width="65" height="19" align="center" valign="top"> S/D/W of </td>
            <td width="9">&nbsp;</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.$fname?></td>
            <td width="10"></td>
            <td rowspan="6" valign="top">
              <label>
                <input type="image" name="imageField" src="images/Non-preview.gif" height="120" width=90"/>
                </label>
            
            </td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top"> Course</td>
          <td></td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.$work?></td>
          <td></td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top"> Branch</td>
          <td></td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.$branch?></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Address</td>
          <td></td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.$add1?></td>
          <td></td>
          </tr>
        <tr>
          <td height="19"></td>
          <td></td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.$add2?></td>
          
          </tr>

       
        <tr>
          <td height="19" align="center" valign="top">DOB</td>
            <td></td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.$dob?></td>
            <td></td>
          </tr>
        <tr>
          <td height="19" colspan="2" align="center" valign="top">Mobile No.</td>
           
            <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.$contact?></td>
            <td></td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Validity</td>
          <td></td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="2">'.'From '.$fselect.' to '.$tselect?></td>
          <td></td>
          <td></td>
          </tr>
        <tr>
          <td height="21" align="center" valign="top">Card No. </td>
            <td>&nbsp;</td>
            <td colspan="3" align="left" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
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
      <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #6598CC; border-radius: 20px;">
        <!--DWLayoutTable-->
        <tr>
          <td width="355" height="258">&nbsp;</td>
          </tr>
      </table></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="130">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>


