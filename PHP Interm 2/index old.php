<?php
	session_start()
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Login and Registration</title>
</head>
	<body>
		<div id="container">
			<?php
				if(isset($_SESSION['success_message']))
				{
					echo "<p>{$_SESSION['success_message']}</p>";
					unset($_SESSION['success_message']);
				}
				else if (isset($_SESSION['error_messages'])) {
					foreach ($_SESSION['error_messages'] as $error_message)
					{
						echo "<p>$error_message</p>";
					}
					unset($_SESSION['error_messages']);
				}
			?>
			<form action="process.php" method="post">
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