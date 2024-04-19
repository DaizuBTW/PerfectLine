<?php

$name = $_POST['name'];
$tel =  $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'PerfectLine@gmail.com';
$subject = 'Contact form';
$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
$message = $message . " From: $name ($tel)";
$headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n" . "Content-type: text/plain; charset=utf-8" . "\r\n";

mail($to, $subject, $message, $headers);
