<?php
session_start();
include 'dbconfig.php';
getFile();

function getFile() {
    $username = $_SESSION['name'];
    $pwd = $_POST['txtpwd'];
    $name = $_POST['txtname'];
    $design = $_POST['txtdesign'];
    $dob = $_POST['txtdob'];
    $address = $_POST['txtadd'];
    $mobile = $_POST['txtmob'];
    $email = $_POST['txtemail'];
    if (($_FILES["file"]["type"] == "image/jpeg") && ($_FILES["file"]["size"] < 2000000)) {
        if ($_FILES["file"]["error"] > 0) {
            die("Return Code: " . $_FILES["file"]["error"] . "<br />");
        } else {
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
               // echo "File already exists.";
           } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
            }
        }
        $open = "upload/" . $_FILES["file"]["name"];
        $handle = fopen("upload/" . $_FILES["file"]["name"], "rb");
        $img = fread($handle, filesize("upload/" . $_FILES["file"]["name"]));
        fclose($handle);
        $img = base64_encode($img);
        $sqlex="UPDATE exam_cell.login SET password = '".$pwd."' WHERE username = '".$username."'";
        mysql_query($sqlex);

        $sql="INSERT INTO exam_cell.profile values ('".$username."','".$name."','".$design."','".$dob."','".$address."',$mobile,'".$email."','".$img."')";     
        mysql_query($sql)or die('Bad Query at 12');
        unlink($open);
        header('location: viewProfile.php?msg=Profile Updated Successfully');
        
    } else {
        $sqlex="UPDATE exam_cell.login SET password = '".$pwd."' WHERE username = '".$username."'";
        mysql_query($sqlex);
        $open = "upload/blank_profile.jpg";
        $handle = fopen("upload/blank_profile.jpg", "rb");
        $img = fread($handle, filesize("upload/blank_profile.jpg"));
        fclose($handle);
        $img = base64_encode($img);
        $sql="INSERT INTO exam_cell.profile values ('".$username."','".$name."','".$design."','".$dob."','".$address."',$mobile,'".$email."','".$img."')";     
        mysql_query($sql)or die('Bad Query at 12');
        header('location: viewProfile.php?msg=Profile Updated Successfully');
    }
}
?>
