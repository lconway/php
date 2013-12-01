<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php

?>

<?php
	$users = array(
		array('first_name' => 'Michael', 'last_name' => 'Choi'),
		array('first_name' => 'John', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		array('first_name' => 'Brooklynn', 'last_name' => 'Conner'),
		array('first_name' => 'Lynn', 'last_name' => 'Conway'),
		array('first_name' => 'Bob', 'last_name' => 'Jones'),
		array('first_name' => 'Laura', 'last_name' => 'Roberts'),
		array('first_name' => 'Sam', 'last_name' => 'Smith'),
		array('first_name' => 'Korie', 'last_name' => 'Edises'),
		array('first_name' => 'Ann', 'last_name' => 'Erikson'),
		array('first_name' => 'Rick', 'last_name' => 'Kruger'),
		array('first_name' => 'Joan', 'last_name' => 'Conway'),
		array('first_name' => 'Cindy', 'last_name' => 'Conner'),
		array('first_name' => 'Jane', 'last_name' => 'Taylor'),
	);

?>

<table>
	<tr>
		<th>User #</ht>
		<th>First Name</ht>
		<th>Last Name</ht>
		<th>Full Name</ht>
		<th>Full Name in upper case</ht>
		<th>Length of name</ht>
	</tr>

<?php

	$row_num = 1;
	foreach ($users as $user){
		$fifth_row = ($row_num % 5 ? "other_row" : "fifth_row");
		echo "<tr class=" . $fifth_row . ">";
		$upper_name = strtoupper($user['first_name']) . " " . strtoupper($user['last_name']);
		$name_len = strlen($upper_name);
		echo "<td>" . $row_num . "</td>";
		echo "<td>" . $user['first_name'] . "</td>";
		echo "<td>" . $user['last_name'] . "</td>";
		echo "<td>" . $user['first_name'] .  " " . $user['last_name'] . "</td>";
		echo "<td>" . $upper_name . "</td>";
		echo "<td>" . $name_len . "</td>";
		echo "</tr>";
		$row_num++;
	}
?>

</table>


