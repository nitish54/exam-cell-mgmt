<?php
include 'dbconfig.php';
$id = $_GET['id'];
if($id!=""){
$sql="SELECT * FROM exam_cell.idcard WHERE id = '".$id."'";
$result = mysql_query($sql);
if(!$result) header('location: idForm.php?msg=ID card doesn\'t exist....Please create!!!');
else
$row = mysql_fetch_array($result);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Print Teacher ID</title>
</script>
</head>

<body onload="window.print()">
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
background-position:center; background-color: #39ACE6; border-radius: 20px">
        <!--DWLayoutTable-->
        <tr>
          <td height="50" colspan="7" valign="top">
            <label>
              <input type="image" name="imageField2" src="images/cover.jpg" width="355" height="50" style="border-top-left-radius: 20px; border-top-right-radius: 20px;"/>
              </label>
          </td>
          </tr>
        <tr>
          <td height="26" colspan="3" align="center" valign="top"><?php echo '<font size="3"><u><b>'.strtoupper($row[1])?></td>
            <td width="9">&nbsp;</td>
            <td width="10" valign="top">I.D.</td>
            <td colspan="3" align="center" valign="top"><?php echo '<font size="3"><b>'.strtoupper($row[0])?></td>
          </tr>
        <tr>
          <td width="65" height="19" align="center" valign="top"> S/D/W of </td>
            <td width="9">:</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[2]?></td>
            <td width="10"></td>
            <td rowspan="6" valign="top">
              <label>
                <input type="image" name="imageField" src="<?php echo $row[11]?>." alt="Image" height="120" width=90"/>
                </label>
            
            </td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Designation</td>
          <td>:</td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[3]?></td>
          <td></td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Department</td>
          <td>:</td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[4]?></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Address</td>
          <td>:</td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[6]?></td>
          <td></td>
          </tr>
        <tr>
          <td height="19"></td>
          <td></td>
          <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[7]?></td>
          
          </tr>

       
        <tr>
          <td height="19" align="center" valign="top">DOB</td>
            <td>:</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[5]?></td>
            <td></td>
          </tr>
        <tr>
          <td height="19" align="center" valign="top">Phone</td>
          <td>:</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[8]?></td>
            <td></td>
          </tr>
        <tr>
          <td height="21" align="center" valign="top">Card No. </td>
            <td>:</td>
            <td colspan="3" align="left" valign="top"><?php echo '<font size="3">'.$row[13]?></td>
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
          <td width="38" height="74">&nbsp;</td>
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
          <td height="76">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
      <tr>
          <td height="23">&nbsp;</td>
          </tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>


