<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['email']))
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Mailer = 'smtp';
    $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "anishguduri7@gmail.com"
    $mail->Password = "Narsaiah7";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->isHTML(true);
    $mail->addAddress("anishguduri7@gmail.com","To College Desk");
    $mail->setFrom("$_POST['email']","$_POST['name']")
    $mail->Subject = "$_POST['subject']";
    $content = "$_POST['message']"
    $mail->MsgHTML($content);
    if(!$mail->Send()){
    echo "Error while sending mail, Try Again!";
    var_dump($mail);
    }
    else{
        echo "Mail Sent Succesfully!";
    }
}
try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>