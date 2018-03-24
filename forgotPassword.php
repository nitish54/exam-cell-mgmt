<?php
 include 'dbconfig.php';
//Initiates a socket connection to www.itechroom.com at port 80
	$conn = @fsockopen("www.google.com", 80, $errno, $errstr, 30);
	if ($conn)
	{
	$name = mysql_real_escape_string($_POST['name']);
        $email = mysql_real_escape_string($_POST['email']);
        $sql="Select email from exam_cell.profile where username= '".$name."'";
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        if ($num > 0) {
            $row = mysql_fetch_array($result);
            if($row[0]==$email){
// send e-mail to ...
        $to =$row[0];
        $subject = "Password Recovery";
// From
        $header = "From: Admin<examcell.srit@gmail.com>";
// Your message
        $sql1="Select password from exam_cell.login where username= '".$name."'";
        $rs = mysql_query($sql1);
        $row1 = mysql_fetch_array($rs);
        $pwd=$row1[0];
        
        $message= "Your Current Password is '".$pwd."'\n Please Change your password immediately after Login.";
            $sentmail = mail($to, $subject, $message, $header);
        if ($sentmail)
            header('location: forgotPwdForm.php?msg=<font color="blue">Password sent successfully..Please check Your Mail box');
            fclose($conn);
	}
        else header('location: forgotPwdForm.php?msg=<font color="red">Email Id not matched to the database.');
        }
        else header('location: forgotPwdForm.php?msg=<font color="red">No Such User Exists.');
        }
	else
	{
		header('location: forgotPwdForm.php?msg=<font color="red">Connect to the Internet First.');		
        }

?>
