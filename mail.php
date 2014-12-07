<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

include 'smtp-func.php';

$to = 'respect9308@mail.ru';
$subject = 'The Subject';
$message = 'this form mailed by logist';
$headers = 'From: respect.page@gmail.com' . "\r\n" .
        'Reply-To: respect.page@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

MailSmtp($to, $subject, $message, $headers);
