<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php
	echo "<table>";
	$max = 8;
	$row_num = 1;
	for ($i=0; $i<$max; $i++)
	{
		if ($row_num % 2)
		{
			$color1 = "color_red";
			$color2 = "color_black";
		}
		else
		{
			$color1 = "color_black";
			$color2 = "color_red";
		}

		$col_num = 1;
		echo "<tr>";
		for ($j=0; $j<$max; $j++)
		{
			if ($col_num % 2)
			{
				echo "<td class=". $color1 ."></td>";
			}
			else
			{
				echo "<td class=". $color2 ."></td>";
			}
			$col_num++;
		}
		echo "</tr>";

		$row_num++;
	}
	echo "</table>";
?>




