<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = $_POST['email'];
$mail->FromName =$_POST['name'];

//To address and name
$mail->addAddress("anishguduri7@gmail.com", "Recepient Name");
$mail->addAddress("anishguduri7@gmail.com"); //Recipient name is optional

// //Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");

// //CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject =$_POST['subject'];
$mail->Body = $_POST['message'];
try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>