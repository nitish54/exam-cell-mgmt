<?php
session_start();
if(!isset($_SESSION['name']))
    header('location: login.php');
    ?>
<style type="text/css">
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
<script language="JavaScript" type="text/javascript">
    function sendValue (){
        var value = document.getElementById('txtId').value;    
        window.opener.document.idform.txtImage.value = value;
        window.opener.focus();
        window.close();
    }
</script>
<?php
$id = $_POST['txtId'];
$imageexist = $_FILES['file']['name'];
//if it is not empty
if ($imageexist) {
    //get the original name of the file from the clients machine
    $filename = stripslashes($_FILES['file']['name']);
    $filename = strtoupper($filename);
    //get the extension of the file in a lower case format
    $extension = end(explode(".", $filename));
    $extension = strtolower($extension);

    //if it is not a known extension, we will suppose it is an error and will not upload the file, otherwize we will do more tests
    if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
        //print error message 
        echo '<h1><center><font color="red">Unknown extension!</h1>';
        echo "<center><a href='popupImage.php'><input type='button' value='   Back   '/></a>";
        die();
    } else if ($_FILES["file"]["size"] > 100000) {
        //print error message
        echo '<h1><center><font color="red">File out of Size Limits...!</h1>';
        echo "<center><a href='popupImage.php'><input type='button' value='   Back   '/></a>";
        die();
    }
    $image_name = strtoupper($id) . '.' . $extension;
    $newname = "idphoto/" . $image_name;
    $copied = copy($_FILES["file"]["tmp_name"], $newname);
    echo "<div align='center' class='look'>";
    echo "<table border='1'><tr><td width='150'>";
    echo "<center><input type='image' src='$newname' width='150' height='170'></center>";
    echo "</td></tr></table><br/>";
    echo"<font color='green' size='4'>Image uploaded successfully</font>";
    echo "<br/><br/>";
    echo "<input type='text' value='$image_name' name='txtId' id='txtId' style='visibility: hidden;'/>";
    echo "<center><input type='button' value='   Proceed   ' onclick='sendValue();return false;'/><a href='popupImage.php?id=strtoupper($id)'><input type='button' value='Upload Another'/></a>";
    echo "</div>";
}
?>
