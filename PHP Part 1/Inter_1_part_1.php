<?php

	function draw_stars($array)
	{
		for($j=0; $j<count($array); $j++)
		{
			$x = $array[$j];
			for ($i=1; $i<=$x; $i++)
			{
				echo "*";
			}
			echo "<br>";
		}
	}

	$sample = array(4, 23, 7, 1, 8, 5, 2);
	draw_stars($sample);
?>