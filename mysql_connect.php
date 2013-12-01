<?php
	require("connection.php");

	$first_name = "Sam";
	$last_name = "Conway";

	$query = "insert into users (first_name, last_name, created_at) values ('{$first_name}', '{$last_name}', NOW())";

	mysql_query($query);

	$query = "delete from users where id = 6";
	mysql_query($query);
	//echo $query;

	$query = "select * from users order by id desc";

	$users = fetch_all($query);

	foreach($users as $user)
	{
		echo $user['id'] . "-" . $user['first_name'] . " " . $user['last_name'] . "<br>";
	}
?>
