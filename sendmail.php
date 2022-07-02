<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";
require_once 'classes/DB.php';

    
function sendsmtp($receiver, $Mail_protocol,$Mail_host, $Mail_port,$Mail_username,$Mail_password,$Mail_from,$Mail_title,$Mail_replyto,$name, $body){

    $Mail_protocol = $Mail_protocol;
    $Mail_host	 = $Mail_host;
    $Mail_port = $Mail_port;
    $Mail_username =$Mail_username;
    $Mail_password = $Mail_password;
    $Mail_from = $Mail_from;
    $Mail_title = $Mail_title;
    $Mail_replyto = $Mail_replyto;
    $name = $name;
    $receiver = $receiver;
    $body = $body;

$mail = new PHPMailer(true);
//Enable SMTP debugging.
$mail->SMTPDebug = 0;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();      
$mail->SMTPSecure = $Mail_encryption;
//Set SMTP host name                          
$mail->Host = $Mail_host;
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = $Mail_username;                 
$mail->Password = $Mail_password;                           
$mail->Port = $Mail_port;                                   

$mail->From = $Mail_from;
$mail->FromName = $name;

$mail->addAddress($receiver);

$mail->isHTML(true);

$mail->Subject = "ArifKen confirmation code";
$mail->Body = "<i>ArifKen confirmation code is ".$body." This is Test From Tito Xampp local Server</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}




?>