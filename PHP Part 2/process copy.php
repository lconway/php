<?php
	session_start();

	$errors = array();
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$errors[] = "Invalid email<br>";
	}
	if (strlen($_POST['password']) < 6)
	{
		$errors[] = "Password must be at least 6 characters<br>";
	}
	if (!($_POST['password'] == $_POST['password_confirm']))
	{
		$errors[] = "Passwords don't match<br>";
	}
	if (!is_string($_POST['first_name']))
	{
		$errors[] = "First Name must be a string<br>";
	}
	// if (!isset($_POST['last_name']) and $_POST['last_name'] != "" and (!is_null($_POST['last_name'])))
	// {
	// 	$errors[] = "Last Name must be a string<br>";
	// }
	// if ($_POST['birthdate'] != "")
	// {
	// 	$date = explode("/", $_POST['birthdate']);
	// 	if(count($date) == 3)
	// 	 {
	// 		$month = $date[0];
	// 		$day = $date[1];
	// 		$year = $date[2];
	// 		if(!checkdate($month, $day, $year))
	// 		{
	// 			$error_message = $error_message . "Invalid date<br>";
	// 		}
	// 	}
	// 	else
	// 	{
	// 		$error_message = $error_message . "Invalid date<br>";
	// 	 }
	// }

	echo "errors = " . count("errors") . "<br>";
	if (count($errors) > 0)
	{
		var_dump($errors);
		$_SESSION['errors'] = $errors;
		header('Location: index.php');
}
?>