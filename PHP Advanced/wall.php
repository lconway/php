<?php
	require("connection.php");
	session_start();

	if(!isset($_SESSION['logged_in']))
	{
		header("Location: index.php");
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Wall Assignment - intermediate version</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
	</body>
		<div id="wrapper">
			<div id="header">
				<h3>CodingDojo Wall</h3>
				<div id="login">
					Welcome <?= $_SESSION['user']['first_name'] ?>!
 					<a href="index.php">log off</a>
 				</div>
				<div class="clear"></div>
			</div>
			<div id="content">
				<div id="messages_div">
					<form action= "processWall.php" method="post">
						<input type="hidden" name="action" value="message"/>
						Post a message</div>
						<textarea  id="curr_message" name="curr_message"></textarea>
						<input  id="post_msg" type="submit" value="Post a message"/>
						<div id="clear"></div>
					</form>
<?php
					$query = "SELECT u.first_name, u.last_name, m.id, m.message, m.created_at ";
					$query = $query . "FROM messages m JOIN users u ON u.id = m.user_id ";
					$query = $query . "ORDER BY m.created_at DESC;";
					//echo $query; die();

					$messages = fetch_all($query);

					foreach ($messages as $message)
					{
						$datetime = strtotime($message['created_at']);
						$date = date("F dS Y", $datetime);
						$message_id = $message['id'];
?>					
					<div class="past_messages">
						<div class="author"><?=$message['first_name']?> <?=$message['last_name']?> - <?=$date?>
						</div>
						<div id="delete_past_message">
							<form  action="processWall.php" method="post">
								<input type="hidden" name="action" value="delete"/>
								<input type="hidden" name="message_id" value=<?=$message_id?>/>
								<input  id="delete_message" type="submit" value="Delete Message"/>
							</form>
						</div>
					<div id="clear"></div>
						</br>
						<p><?=$message['message']?></p>
				</div>
<!--					<div class="past_messages">
						<div class="author"><?=$message['first_name']?> <?=$message['last_name']?> - <?=$date?>
						</div>
						<p><?=$message['message']?></p>
					</div>
-->

					<div id="comments_div">
<?php
						$query = "SELECT u.first_name, u.last_name, c.comment, c.created_at ";
						$query = $query . "FROM comments c JOIN users u ON u.id = c.user_id ";
						$query = $query . "WHERE c.message_id = " . $message_id . " ";
						$query = $query . "ORDER BY c.created_at DESC;";
						//echo $query; die();

						$comments = fetch_all($query);

						foreach ($comments as $comment)
						{
							$datetime = strtotime($comment['created_at']);
							$date = date("F dS Y", $datetime);
?>
						<div class="past_comments">
							<div class="author"><?=$comment['first_name']?> <?=$comment['last_name']?> - <?=$date?>
							</div>
							</br>
							<p><?=$comment['comment']?></p>
						</div>
<?php
					}       // end foreach $comments
?>
						<form action= "processWall.php" method="post">
							<input type="hidden" name="action" value="comment"/>
							<input type="hidden" name="message_id" value=<?=$message_id?>/>
							<div class="small_text">Post a comment</div>
							<textarea  id="curr_comment" name="curr_comment"></textarea>
							<input  id="post_comment" type="submit" value="Post a comment"/>
							<div id="clear"></div>
						</form>
					</div>       <!-- end comments_div -->



<?php
					}       // end foreach $messages
?>
			</div>       <!-- end messages_div -->
		</div>       <!-- end content -->
	</body>       <!-- end wrapper -->
</html>
