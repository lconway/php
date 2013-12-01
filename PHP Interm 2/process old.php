<?php
	session_start();

	if ($_POST)
	{
		$errors = NULL;

		//email validation
		if (empty($_POST['email']))
		{
			$errors[] = "Email address cannot be blank.";
		}
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors[] = "Email should be in valid format.";
		}

		//First name validation
		if (empty($_POST['first_name']))
		{
			$errors[] = "First name cannot be blank.";
		}
		else if (is_numeric($_POST['first_name']))
		{
			$errors[] = "First name must be a string.";
		}

		//Last name validation
		if (empty($_POST['last_name']))
		{
			$errors[] = "Last name cannot be blank.";
		}
		else if (is_numeric($_POST['first_name']))
		{
			$errors[] = "Last name must be a string.";
		}

		//Password validation
		if (empty($_POST['password']))
		{
			$errors[] = "Password cannot be blank.";
		}
		else if ($_POST['password'] < 6)
		{
			$errors[] = "Password must be at least 6 characters.";
		}

		//Confrim Password validation
		if ($_POST['confirm_password'] != $_POST['password'])
		{
			$errors[] = "Passwords don't match.";
		}

		if ($errors == NULL)
		{
			$_SESSION['success_message'] = "Thank you for your information.";
		}
		else
		{
			$_SESSION['error_messages'] = $errors;
		}
	}
	
	header("Location: index.php");
?>

