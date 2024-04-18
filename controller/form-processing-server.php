<?php

$name = $_POST['name'];
$tel =  $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'PerfectLine@gmail.com';
$subject = 'Contact form';
$message = $message . " From: $name ($tel)";
$headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";

mail($to, $subject, $message, $headers);
