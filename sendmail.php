<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

    try{

        if(isset($_POST['btn']))
        {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];


   
 
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "ahmedays001@gmail.com";                     //SMTP username
    $mail->Password   = 'bbad goxb pdgv nmnj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email);

    $mail->addAddress("ahmedays001@gmail.com" , $name ) ;               //Name is optional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact inquiry from: '.$name;
    $mail->Body    =   'Username: '.$name.'<br>User Email: '.$email.'<br>User Message : '.$msg;
    // $mail->AltBody = $msg;
    $mail->send();
    header('location: index.php');
        }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>