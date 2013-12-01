<?php

	function draw_stars($array)
	{
		for($j=0; $j<count($array); $j++)
		{
			$x = $array[$j]; 
			if (is_string($x))
			{
				$x = lcfirst($x);
				$len = strlen($x);
				$str_array = str_split($x);
				$char = $str_array[0];

				for ($i=1; $i<=$len; $i++)
				{
					echo $char;
				}
			}
			else if (is_int($x))
			{
				for ($i=1; $i<=$x; $i++)
				{
					echo "*";
				}
			}
			echo "<br>";
		}
	}

	$sample = array(4, "Lynn", 7, "Sam", 1, 8, "Brooklynn", 2);
	draw_stars($sample);
?>