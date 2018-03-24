<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: login.php');
//Initiates a socket connection to www.itechroom.com at port 80
	$conn = @fsockopen("www.google.com", 80, $errno, $errstr, 30);
	if ($conn)
	{
	$to = $_POST['txtTo'];
        $subject = $_POST['txtSub'];
        $msg = $_POST['txtMsg'];
        $message = wordwrap($msg, 70);
// send e-mail to ...
        $arrTo = explode(",", $to);
// From
        $header = "From: SRIT<examcell.srit@gmail.com>";
// Your message
        for ($i = 0; $i < count($arrTo); $i++)
            $sentmail = mail($arrTo[$i], $subject, $message, $header);
        if ($sentmail)
            header('location: contactForm.php?msg=<font color="blue">Message sent successfully.');
            fclose($conn);
	}
	else
	{
		header('location: contactForm.php?msg=<font color="red">Not sent!!! Check Your internet connection.');		
        }
?>