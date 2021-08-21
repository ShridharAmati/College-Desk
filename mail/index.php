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
    // $mail->Mailer = 'smtp';
    // $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "anishguduri7@gmail.com"
    $mail->Password = "Narsaiah7";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    // $mail->isHTML(true);
    $mail->setFrom("$_POST['email']","$_POST['name']");
    $mail->addAddress("anishguduri7@gmail.com","To College Desk");
    $mail->Subject = "$_POST['subject']";
    $mail->Body ='<b>name: </b>' .$_POST['name'] .'<br>' .'<b>Email: </b>' .$_POST['email'] .'<br>' .'<b>Message:</b>' .$POST['message'];
    // $content = "$_POST['message']"
    // $mail->MsgHTML($content);
    if($mail->Send()){
    echo json_encode(array("code"=> 200, "message" = "Mail Sent"));
    }
    else{
        echo json_encode(array("code"=> 500, "message" = "Something went wrong","error" => $mail->ErrorInfo));
    }
}
else{
    header('location: ../');
}
?>