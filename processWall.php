<?php
	require("connection.php");
	session_start();

	//var_dump($_POST);

	if (isset($_POST['action']) and $_POST['action'] == "message")
	{
		//var_dump($_POST);
		messageAction();
	}
	else if (isset($_POST['action']) and $_POST['action'] == "comment") 
	{
		commentAction();
	}
	else if (isset($_POST['action']) and $_POST['action'] == "delete") 
	{
		deleteMessageAction();
	}

	function messageAction()
	{
			//var_dump($_POST);
		if (empty($_POST['curr_message']))
		{
			echo "NO Message";
		}
		else
		{
			$query = "INSERT INTO messages (user_id, message, created_at) ";
			$query = $query . "VALUES (" . $_SESSION['user']['id'] . ", '" . mysql_real_escape_string($_POST['curr_message']) . "',  NOW());";			
			//echo $query; die();
			mysql_query($query);
		}
	}

	function deleteMessageAction()
	{
		$message_id = intval($_POST['message_id']);
		$query = "delete from comments where message_id = " . $message_id . ";";
		//echo $query; die();
		mysql_query($query);
		$query = "delete from messages where id = " . $message_id . ";";
		//echo $query; die();
		//mysql_query($query);
	}

	function commentAction()
	{
			//var_dump($_POST);
		if (empty($_POST['curr_comment']))
		{
			echo "NO Comment";
		}
		else
		{
			$message_id = intval($_POST['message_id']);
			$query = "INSERT INTO comments (user_id, message_id, comment, created_at) ";
			$query = $query . "VALUES (" . $_SESSION['user']['id'] . ", " . $message_id . ", '" . mysql_real_escape_string($_POST['curr_comment']) . "',  NOW());";			
			//echo $query; die();
			mysql_query($query);
		}
	}
	header("Location: wall.php");

?>