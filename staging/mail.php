<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="$message";
$recipient = "jenyferi@gmail.com";
$subject = "The Law Office of Eric J. Phillips Website Contact Form";
$mailheader = "MIME-Version: 1.0\r\n"
  ."Content-Type: text/plain; charset=utf-8\r\n"
  ."Content-Transfer-Encoding: 8bit\r\n"
  ."From: =?UTF-8?B?". base64_encode($name) ."?= <$email>\r\n"
  ."X-Mailer: PHP/". phpversion();

mail($recipient, $subject, $formcontent, $mailheader);
?>
 