<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
//$mail->SMTPDebug = 4;
$mail->Host = "ssl://smtp.gmail.com"; 
//$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'ticketing.system189@gmail.com';          // SMTP username
$mail->Password = 'samplepassword123'; // SMTP password
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                          // TCP port to connect to

$mail->setFrom('ticketing.system189@gmail.com', 'Sender');
// $mail->addReplyTo('info@example.com', 'CodexWorld');
$mail->addAddress('andanarandrian@gmail.com');   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

// $bodyContent = '<h2>How to Send Email using PHP in Localhost by CodexWorld</h2>';
// $bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';

$mail->Subject = 'Sample Email';
// $mail->Body    = $bodyContent;
$mail->Body    = 'This is a test';

if(!$mail->send()) {
    // echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>