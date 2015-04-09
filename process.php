<?php
{
	$to = 'kontakt@gutachten-blunk.de'; // Replace with your email	
	$subject = 'Kontaktformular'; // Replace with your $subject
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	
	$message = 'Name: ' . $_POST['name'] . "\r\n" . "\r\n" .
	           'E-mail: ' . $_POST['email'] . "\r\n" . "\r\n" .
	           '' . $_POST['message'];
	
	mail($to, $subject, $message, $headers);	
	
}
?>