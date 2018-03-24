<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload Photo</title>
<style type="text/css">
<!--
.style5 {font-size: 24px}
-->
 <!--
        div.look {
            height: 400px;
            width: 500px;
            overflow: auto;
            border: 1px solid #666;
            background-color: #ccc;
            vertical-align: top;
   
        }
 -->
</style>
</head>

<body>
    <div class="look">
<table width="500" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="93" height="44">&nbsp;</td>
    <td width="130">&nbsp;</td>
    <td width="26">&nbsp;</td>
    <td width="17">&nbsp;</td>
    <td width="40">&nbsp;</td>
    <td width="14">&nbsp;</td>
    <td width="90">&nbsp;</td>
    <td width="74">&nbsp;</td>
    <td width="116">&nbsp;</td>
  </tr>
  <tr>
    <td height="30"></td>
    <td colspan="4" valign="top"><span class="style5">Upload Photo:</span> </td>
    <td>&nbsp;</td><form id="form1" name="form1" enctype="multipart/form-data" method="post" action="doUpload.php">
    <td colspan="4" valign="top">
      <label>
        <input type="file" name="file" />
        </label>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="9"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="25"></td>
    <td>&nbsp;</td><td>&nbsp;</td>
    
    <td colspan="3" valign="top">
      <label>
        <input type="submit" name="Submit" value="   Submit   " />
        </label>
    </td>
    
    <td valign="top">
      <label>
        <input name="reset" type="reset" id="reset" value="   Reset   " />
        </label>
    </td>
    <tr>
        <td colspan="5">
            <input type="text" value="<?php echo $_GET['id']?>" name="txtId" style="visibility: hidden;"/>
        </td>
    </tr>
  </form>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td height="48"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="117"></td>
    <td colspan="8" valign="top"><p>*Note: </p>
    <p>Upload Image for ID Card in formats either jpg, gif, jpeg, png.</p>
    <p>Size should not exceed 100 kilo bytes. </p></td>
    <td></td>
  </tr>
  <tr>
    <td height="31"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
    </div>
</body>
</html>
