<?php
require('dotenv').config();
require "PHPMailer/PHPMailerAutoload.php";
	$fname = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

function smtpmailer($fname, $email, $subject, $message)
{
/* creates object */
$mail = new PHPMailer();
$mailid = "jerryraj40@gmail.com";
$subject = "Form Submitted";
$text_message = "Hello";
$body = nl2br("Full Name: $fname\nEmail: $email\nSubject: $subject\nMessage: $message");
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.sendgrid.net";
$mail->Port = '25';
$mail->AddAddress($mailid);
$mail->Username ="apikey";
$mail->Password ="process.API_KEY";
$mail->SetFrom($email,$fname);
$mail->AddReplyTo($email,$fname);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = $body;
$mail->Send();
if($mail->Send())
{
$error = "Thank you for your message. I will respond back ASAP.";
 return $error;
}
else
{
	$error = "No Thank you for your message. I will respond back ASAP.";
 return $error;
}
}
?>
