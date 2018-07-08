<?php

	$email=$_POST['email'];

	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$headers = 'From:'. $email .  "\r\n"; // Sender's Email
	// Message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);

	// Send Mail By PHP Mail Function
	mail("pratiksha.goyal@indifi.com", $subject, $message, $headers);

	echo "Your mail has been sent successfuly ! Thank you for your feedback";

?>
