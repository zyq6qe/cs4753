<?php
/**
 * Created by PhpStorm.
 * User: Zophie
 * Date: 10/31/16
 * Time: 10:36 PM
 */

if (session_id() == "")
    session_start();

require 'PHPMailerAutoload.php';
$receiver = $_SESSION['email'];

echo $receiver;

$mail = new PHPMailer;
$mail->setFrom('succs4u@gmail.com', 'Succs4U');
$mail->addAddress($receiver, 'My Friend');
$mail->Subject  = 'Thanks for your registration!';
$mail->Body     = 'Thank you for signing up for Succs4U!';
if(!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    $mail->send();
    echo 'Message has been sent.';
}