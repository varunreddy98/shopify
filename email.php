<?php
require('C:\wamp64\www\PHPMailer\class.phpmailer.php');
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host     = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'bachivarunreddy@gmail.com';
$mail->Password = 'Varunrdz027';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
$mail->setFrom('bachivarunreddy@gmail.com', 'Hello');
$mail->addReplyTo('bachivarunreddy@gmail.com', 'Hello');

// Add a recipient
$mail->addAddress('bachivarunreddy@gmail.com');

// Add cc or bcc 
$mail->addCC('bachivarunreddy@gmail.com');
$mail->addBCC('bachivarunreddy@gmail.com');

// Email subject
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '
    <h2>Send HTML Email using SMTP in PHP</h2>
    <p>It is a test email by CodexWorld, sent via SMTP server with PHPMailer using PHP.</p>
    <p>Read the tutorial and download this script from <a href="https://www.codexworld.com/">CodexWorld</a>.</p>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}
?>