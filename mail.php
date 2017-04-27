<?php
$to      = 'moresuhas010@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: dsuhas4u@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$suc=mail($to, $subject, $message, $headers);
echo "$suc";
?>
