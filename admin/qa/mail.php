<?php
// Include PHPMailer library
// require './PHPMailer-5.2-stable/PHPMailerAutoload.php';
// // Create a new PHPMailer instance
// $mail = new PHPMailer;

// // Set mail server details
// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.gmail.com';                   // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'admin@preeyanuch.online';                 // SMTP username
// $mail->Password = 'Admin123456';                           // SMTP password
// $mail->SMTPSecure = 'tls;';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

// // Recipients
// $mail->setFrom('admin@preeyanuch.online', 'Mailer');
// $mail->addAddress('preeyanuchseedama@gmail.com', 'Por');     // Add a recipient

// // Content
// $mail->isHTML(true);                                  // Set email format to HTML
// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// // Send the email
// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }

$to = "preeyanuchseedama@gmail.com"; //for example
$subject = 'the subject';
$message = 'hello';
$headers = 'From: admin@preeyanuch.online' . "\r\n" .
'Reply-To: adminvv@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","465");
ini_set("sendmail_from","admin@preeyanuch.online");
mail($to, $subject, $message, $headers);
?>

