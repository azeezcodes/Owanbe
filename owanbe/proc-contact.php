<?php

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

if(!$name || !$email || !$phone || !$message)
{
    $error = 'formerror';
    include('error.php');
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $error = 'emailerror';
    include('error.php');
    exit;
}

else{
$to = 'info@owanbemart.com';
$subject = 'Message from contact form';
$from = 'From: noreply@owambe.com';

$content = 'Message from contact form'."\n"
            .'Name: '.$name."\n"
            .'Email: '.$email."\n"
            .'Phone: '.$phone."\n"
            .'Message: '.$message."\n";

mail($to, $subject, $from, $content);
include('thankyou.php');
}


?>
