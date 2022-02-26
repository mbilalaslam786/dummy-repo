<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@Website.com';

$email_subject = 'New Form Submission';

$email_body = 'User Name: $name.\'.
                'User Email: $visiter_email.\'.
                "Subject: $subject.\".
                "Message: $message.\";

$to = 'mbilalaslam26@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: index.html");

?>