<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));  
	$subject = @trim(stripslashes($_POST['subject']));  
	$message = @trim(stripslashes($_POST['message'])); 

<<<<<<< HEAD
	$email_from = 'engisaacnewton@gmail.com';
	$email_to = 'engisaacnewton@gmail.com';
=======
	$email_from = $email;
	$email_to = 'engisaacnewton@gmail.com'; //replace with your email
>>>>>>> 43c448327dcd1190cdd851d441fe22f79d872b89

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Thank you for contact us. As early as possible  we will contact you.");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=https://engisaacnewton.com/"> 
</head>
