<?php
$to = "elgazzpro@gmail.com";
$email = $_POST["email"];
$subject =$_POST["subject"];
$message =$_POST["message"];
$headers = array(
    'From' => $email,
    'X-Mailer' => 'PHP/' . phpversion()
);
$r = mail(
     $to,
     $subject,
     $message,
     $headers
);
?>
