<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
if(isset($_POST['email']))
{
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";  
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "anishguduri7@gmail.com";
$mail->Password   = "jnjnsljllwevfuhc";
$mail->IsHTML(true);
$mail->AddAddress("gudurianish@gmail.com", "Anish Guduri");
$mail->SetFrom("anishguduri7@gmail.com", "Admin");
$mail->Subject =$_POST['subject'];
$content='<b>Name: </b>' .$_POST['name'] .'<br><br>' .'<b>Email: </b>' .$_POST['email'] .'<br><br>' .'<b>Subject: </b>' .$_POST['subject'] .'<br><br>' .'<b>Message:</b>' .$_POST['message'];
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
} 
else{
     header('location: ../');
}   
?>
