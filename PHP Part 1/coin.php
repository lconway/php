<?php

	function get_max_and_min($array)
	{
		$max = 0;
		$min = $array[0];
		$min_max_array = array();

		foreach($array as $value)
		{
			echo "value = " . $value . "</br>";
			if ($value > $max)
				$max = $value;
			else if ($value < $min)
				$min = $value;
		}
		$min_max_array["max"] = $max;
		$min_max_array["min"] = $min;
		return $min_max_array;
	}

	$sample = array(43.4, 532, 77, 1.7, 888, 934.4, 31);
	$output = get_max_and_min($sample);
	var_dump($output);
?>