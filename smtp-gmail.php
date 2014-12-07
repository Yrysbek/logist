<?php

require_once "Mail.php";

$from = "username@gmail.com";
$to = "respect9308@mail.ru";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

/* SMTP server name, port, user/passwd */
$smtpinfo["host"] = "ssl://smtp.gmail.com";
$smtpinfo["port"] = "465";
$smtpinfo["auth"] = true;
$smtpinfo["username"] = "respect.page@gmail.com";
$smtpinfo["password"] = "passwd";

$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);
$smtp = Mail::factory('smtp', $smtpinfo);

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message successfully sent!</p>");
}
?>  