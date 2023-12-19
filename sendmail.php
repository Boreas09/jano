<?php

require 'inc/PHPMailer-master/src/Exception.php';
require 'inc/PHPMailer-master/src/PHPMailer.php';
require 'inc/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-relay.brevo.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "unipolydiffancy@gmail.com";
$mail->Password = "UnipolyDiffancy";

$mail->setFrom($email, $name);
$mail->addAddress("unipolydiffancy@gmail.com", "Dave");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();
