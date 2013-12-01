<?php
	session_start();
?>
<?php
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>User Login</title>
</head>
	<body>
		<div id="wrapper">
			<?php
			if(isset($_SESSION['errors']))
				foreach($_SESSION['errors'] as $error)
				{
					echo $error . "<br>";
				}
				unset($_SESSION['errors']);
			?>

			<form id="user_login" action="process.php" method="post">
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
