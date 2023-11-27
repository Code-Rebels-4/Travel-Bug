<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "travelbug.info.lk@gmail.com";
$subject = "Mail from TravelBug";
$txt = "Name = " . $name . "\r\n  Email Address = " . $email . "\r\n Subject =" . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@travelbug.lk" . "\r\n" .
    "CC: somebodyelse@example.com";
if ($email != null) {
    mail($to, $subject, $txt, $headers);
}
header("Location:../contact.html");
