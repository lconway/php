<?php
	session_start();

	function process_errors()
	{
		$errors = $_SESSION['errors'];
		for ($i=0; $i<count($errors); $i++)

		{
			echo "Error #: " . $errors[$i]["number"] . "Error message: " . $errors[$i]["message"]. "<br>";
		}

	}
?>
<?php
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css"/>
</head>
	<body>
		<div id="wrapper">
			<h3 id="validation">
				<?php
				if(isset($_SESSION['errors']))
					{
						process_errors();
					}
					else if (isset($_SESSION['welcome']))
					{
						echo "Thanks for submitting your information.";
					}
				?>
			</h3>

			<form id="user_login" action="process.php" method="post">
				<?php
					if ($_SESSION['errors'] == 1)
					{
				?>
					First Name : * <input class="yellow_back" type="text" name="first_name"/><br>
				<?php
					}
					else
					{
				?>
					First Name : * <input class="white_back" type="text" name="first_name"/><br>
				<?php
					}
				?>
				First Name : * <input type="text" name="first_name"/><br>
				Last Name: * <input type="text" name="last_name"/><br>
				Email: * <input type="text" name="email" placeholder="enter email address"/><br>
				Password: * <input type="password" name="password"/><br>
				Confrim Password: * <input type="password" name="password_confirm"/><br>
				Birthdate: <input type="text" name="birthdate"/><br>
				<input type="submit" value="Login"/>
			</form>
		</div>

</body>
</html>
<?php
	unset($_SESSION['errors']);
	unset($_SESSION['welcome']);
?>
