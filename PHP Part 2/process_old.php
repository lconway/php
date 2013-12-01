<?php
	session_start();

	$error_message = array();
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$error_message[] = array("number" => 1, "message" => "Invalid email");
		$error_message[] = array("number" => 2, "message" => "Password must be");
	  	//var_dump($error_message);
	}
	// if (strlen($_POST['password']) < 7)
	// {
	// 	$error_message = $error_message . "Password must be at least 6 characters<br>";
	// }
	// if ($_POST['password'] != $_POST['password_confirm'])
	// {
	// 	$error_message = $error_message . "Passwords don't match<br>";
	// }
	// if ($_POST['first_name'] == "" || is_null($_POST['first_name']))
	// {
	// 	$error_message = $error_message . "First Name must be a string<br>";
	// }
	// if ($_POST['last_name'] == "" || is_null($_POST['last_name']))
	// {
	// 	$error_message = $error_message . "Last Name must be a string<br>";
	// }
	header('Location: index.php');

	if (count($error_message) > 0)
	{
		$_SESSION['errors'] = $error_message;
	}
	else
	{
		$_SESSION['welcome'] = true;
	}
	echo "<br>Error Message[] has " . count($error_message) . "<br>";
?>