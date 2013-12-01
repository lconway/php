<?php
	require("connection.php");
	session_start();

	//what does the user want to do - Login or Register
	if (isset($_POST['action']) and $_POST['action'] == "login")
	{
		loginAction();
	}
	else if (isset($_POST['action']) and $_POST['action'] == "register")
	{
		registerAction();
	}
	
	function loginAction()
	{
		//echo "loginAction";
		$errors = array();

		//email validation
		if (empty($_POST['email']))
		{
			$errors[] = "Email address cannot be blank.";
		}
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors[] = "Email should be in valid format.";
		}

		//Password validation
		if (empty($_POST['password']))
		{
			$errors[] = "Password cannot be blank.";
		}
		else if (strlen($_POST['password']) < 6)
		{
			$errors[] = "Password must be at least 6 characters.";
		}

		//see if there are any errors
		if (count($errors) > 0)
		{
			$_SESSION['login_errors'] = $errors;
			header("Location: index.php");
		}
		else
		{
			//check for valid email and password
			$query = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password = '" . md5($_POST['password']) . "'";
			//echo $query; die();

			$users = fetch_all($query);

			if (count($users) > 0)      //valid email
			{
				$_SESSION['logged_in'] = true;
				$_SESSION['user']['id'] = $users[0]['id'];
				$_SESSION['user']['first_name'] = $users[0]['first_name'];
				$_SESSION['user']['last_name'] = $users[0]['last_name'];
				$_SESSION['user']['email'] = $users[0]['email'];
				header("Location: wall.php");

			}
			else                        //invalid email
			{
				$errors[] = "Invalid login information";
				$_SESSION['login_errors'] = $errors;
			}
		}

	}

	function registerAction()
	{
		$errors = array();

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
		else if (strlen($_POST['password']) < 6)
		{
			$errors[] = "Password must be at least 6 characters.";
		}

		//Confrim Password validation
		if ($_POST['confirm_password'] != $_POST['password'])
		{
			$errors[] = "Passwords don't match.";
		}

		// check for success or errors
		if (count($errors) > 0)
		{
			$_SESSION['register_errors'] = $errors;
		}
		else
		{
			// determine if email address been taken
			$query = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
			$users = fetch_all($query);

			// any users with this email
			if (count($users) > 0)
			{
				$errors[] = "A user is already registered with this email address";
				$_SESSION['register_errors'] = $errors;
				header("Location: index.php");
			}
			else
			{
				$query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '".md5($_POST['password'])."', NOW())";
				mysql_query($query);

				$_SESSION['success_message'] = "User has been successfully created.";
			}

		}
		header("Location: index.php");
	}
	
?>

