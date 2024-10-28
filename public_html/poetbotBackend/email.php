<?php

require("mailer/PHPMailer.php");
require("mailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = $_POST["mail"];
$pdfURL = "../poetbot/". $_POST["poemURL"];


if(filter_var($mail, FILTER_VALIDATE_EMAIL))
{
    $message = "Hello,\r\n Your personalised poem is in the attachment";
    
    $email = new PHPMailer();
    $email->SetFrom('poetbot@poetbot.com', 'Poetbot'); //Name is optional
    $email->Subject   = 'Your personalised poem from Poetbot.com';
    $email->Body      = $message;
    $email->AddAddress( $mail );

$file_to_attach = $pdfURL;

$email->AddAttachment( $file_to_attach , 'poem.pdf' );

$email->Send();  
    
echo "OK";
}
else
{
 echo 'Invalid email address!';
}


?>