<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

extract($_POST);
$filenamee = $_FILES['file']['name'];
$filename = $_FILES['file']['tmp_name'];

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
/*if($_FILES['file']['name']!=null){
    echo"this is not null"; 
}*/

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'vishusaxena3110@gmail.com';                     //SMTP username
    $mail->Password   = 'saxena3110';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('vishusaxena3110@gmail.com', 'BCAS');
    $mail->addAddress($email); 

    
    $mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Marksheet';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    header("Location: ../checked.html");
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: ../crossed.html");
}