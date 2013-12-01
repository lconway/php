<?php

	$coin = rand(1,2);
	$count = 1;

	foreach($coins as $coin)
	{
		if ($coid == 1)
			echo "Attempt #" . $count . ":  Throwing a coin...  It's a head!";
		else
			echo "Attempt #" . $count . ":  Throwing a coin...  It's a tail!";
		$count++;
	}
 ?>