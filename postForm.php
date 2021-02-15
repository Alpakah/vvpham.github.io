<?php

	if(empty($_POST['submit']))
	{
		echo "Form is not submitted!";
		exit;
	}
	if(empty($_POST["fullname"]) ||
		empty($_POST["email"]))
		{
			echo "Please fill the form";
			exit;
		}
		
	$name = $_POST["fullname"];
	$email = $_POST["email"];

	mail( 'hahnsuk@gmail.com',
	'New Form Submission from Vinh''s Website', 
	"New Form Submission from your Website:\n\n
	Name:\n
	$name\n\n

	Email:\n
	$email\n\n

	Subject:\n
	$subject\n\n

	Message:\n
	$message\n\n
	");

	header('Location: thank-you.html');

?>