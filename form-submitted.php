<?php
// require('dotenv').config();

if (isset($_POST['submit'])){

	$fname = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
}
else
// require_once 'phpmailer/class.phpmailer.php';
// /* creates object */
// $mail = new PHPMailer(true);
// $mailid = "jerryraj40@gmail.com";
// $subject = "Form Submitted";
// $text_message = "Hello";
// $body = nl2br("Full Name: $fname\nEmail: $email\nSubject: $subject\nMessage: $message");

// try
// {
// $mail->IsSMTP();
// $mail->isHTML(true);
// $mail->SMTPDebug = 0;
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = "tls";
// $mail->Host = "smtp.sendgrid.net";
// $mail->Port = '25';
// $mail->AddAddress($mailid);
// $mail->Username ="apikey";
// $mail->Password ="process.API_KEY";
// $mail->SetFrom($email,$fname);
// $mail->AddReplyTo($email,$fname);
// $mail->Subject = $subject;
// $mail->Body = $body;
// $mail->AltBody = $body;
// $mail->Send();
// if($mail->Send())
// {
{echo "Thank you for your message. I will respond back ASAP.";}
// }
// }
// catch(phpmailerException $ex)
// {
// $msg = "
// ".$ex->errorMessage()."
// ";
// }
?>
