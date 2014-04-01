<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: Portfolio Site Form'; 
	$to = 'amber@designcreaturex.com';
	$subject = 'Web Inquiry';
	$human = $_POST['human'];
		
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
	if ($_POST['submit'] && $human == '7') {				 
		if (mail ($to, $subject, $body, $from)) { 
			echo '<p>Your message has been sent! Return to <a href="http://www.ambercanderson.com">site</a>.</p>';
		} else { 
			echo '<p>Something went wrong, go back and try again!</p>'; 
		} 
	} else if ($_POST['submit'] && $human != '7') {
		echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
?>
