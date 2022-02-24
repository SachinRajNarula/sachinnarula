<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

if (isset($_POST['submit'])){

	$fname = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
}

/* creates object */
$mail = new PHPMailer(true);
$mailid = "jerryraj40@gmail.com";
$subject = "Form Submitted";
$text_message = "Hello";
$body = nl2br("Full Name: $fname\nEmail: $email\nSubject: $subject\nMessage: $message");

try
{
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
echo "Thank you for your message. I will respond back ASAP.";
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
";
}
?>
