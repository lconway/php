<?php
	require("connection.php");
	session_start()
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
	<body>
		<div id="container">

			<h1>Login</h1>
<?php
			if (isset($_SESSION['login_errors'])) {
				foreach ($_SESSION['login_errors'] as $error_message)
				{
					echo "<p class='error'>$error_message</p>";
				}
				unset($_SESSION['login_errors']);
			}
?>
			<form action="process.php" method="post">
				<input type="hidden" name="action" value="login"/>
				<input type="text" name="email" placeholder="Email address" /><br />
				<input type="password" name="password" placeholder="Password" /><br />
				<input type="submit" value="Login" />
			</form>



			<h1>Registration</h1>
<?php
			if(isset($_SESSION['success_message']))
			{
				echo "<p class='success'>{$_SESSION['success_message']}</p>";
				unset($_SESSION['success_message']);
			}
			else if (isset($_SESSION['register_errors'])) {
				foreach ($_SESSION['register_errors'] as $error_message)
				{
					echo "<p class='error'>$error_message</p>";
				}
				unset($_SESSION['register_errors']);
			}
?>
			<form action="process.php" method="post">
				<input type="hidden" name="action" value="register"/>
				<input type="text" name="first_name" placeholder="First Name" /><br />
				<input type="text" name="last_name" placeholder="Last Name" /><br />
				<input type="text" name="email" placeholder="Email address" /><br />
				<input type="password" name="password" placeholder="Password" /><br />
				<input type="password" name="confirm_password" placeholder="Confirm Password" /><br />
				<input type="submit" value="Register" />
			</form>
		</div>
	</body>
</html>