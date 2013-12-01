<?php

	function draw_stars($array)
	{
		foreach($array as $x)
		{
			for ($i=1; $i=$x; $i++)
				echo "*";
			echo "<br>";
		}
	}

	$sample = array(4, 23, 7, 1, 8, 5, 2);
?>