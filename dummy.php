<?php
$subject="Test mail";
$to="nitishsinha23@gmail.com";
$body="This is a test mail";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: <54nitish@gmail.com>";
if (mail($to,$subject,$body,$headers))
echo "Mail sent successfully!";
else
echo"Mail not sent!";
?>
