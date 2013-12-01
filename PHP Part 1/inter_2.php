<link rel="stylesheet" type="text/css" href="css/style.css"/>

<table>

<?php
	$even_odd = "even";
	for ($i=0; $i<10; $i++)
	{
		$even_odd = ($i % 2 ? "odd" : "even");
		echo "<tr>";
		for ($j=0; $j<10; $j++)
		{
			if ($i == 0 and $j == 0)
				echo "<th> </th>";
			else if ($i == 0)
				echo "<th>" . $j . "</th>";
			else if ($j == 0)
				echo "<th>" . $i . "</th>";
			else
				echo "<td class=". $even_odd . ">" . $i * $j . "</td>";
		}
		echo "</tr>";
	}
?>

</table>


