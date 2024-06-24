<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];


$email_from = 'ashishbedi02@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"subject: $subject.\n".
"User Message: $message.\n".

$to = 'ashishbedi02@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html")



?>