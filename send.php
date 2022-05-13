<?php
$email   = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["msg"];

if ($email == NULL || $subject == NULL || $message == NULL)
{
	echo '<script type="text/javascript">';
	echo 'alert("Fields are missing,please try again.")';
	echo '</script>';
}
else
	{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			mail("info@olympiadwizard.com", $subject, $message,"From: $email\n");
			echo '<script type="text/javascript">';
			echo 'alert("Thanks for contacting us.")';
			echo '</script>';
		} else {
			echo '<script type="text/javascript">';
			echo 'alert("Please enter valid email.")';
			echo '</script>';
		}
	}
?>