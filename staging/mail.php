<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sender = "ejphillips@ehost-services222.com";
$formcontent="$message";
$recipient = "ephillips@ejphillipslaw.com";
$subject = "The Law Office of Eric J. Phillips Website Contact Form";
$mailheader = "MIME-Version: 1.0\r\n"
  ."Content-Type: text/plain; charset=utf-8\r\n"
  ."Content-Transfer-Encoding: 8bit\r\n"
  ."From: =?UTF-8?B?". base64_encode($name) ."?= <$sender>\r\n"
  ."Reply-To: =?UTF-8?B?". base64_encode($name) ."?= <$email>\r\n"
  ."X-Mailer: PHP/". phpversion();

$messagesent = mail($recipient, $subject, $formcontent, $mailheader);
header("HTTP/1.1 303 See Other");
if($messagesent)
{
	header("Location: contact.html?sent=true");
}else 
{
	header("Location: contact.html?sent=false");
}
?>
 