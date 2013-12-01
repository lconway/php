<?php

	$count = 1;
	$prev_dice = 0;
	$result_summary = array(0, 0, 0, 0, 0, 0);

	for($i=0; $i<50; $i++)
	{
		$dice = rand(1,6);
		echo "Roll: " . $count . "     Dice is ". $dice . "<br>";

		if ($prev_dice != 0)
			if ($dice == $prev_dice)
				echo "<b>Wow. You rolled the same number twice in a row!</b></br>";

		$result_summary[$dice-1]++;		
		$prev_dice = $dice;
		$count++; 
	}

	$count = 1;
	for($i=0; $i<6; $i++)
	{	$percent = $result_summary[$i]/50;
		echo "Number ". $count . " was rolled " . $result_summary[$i] . " times - " . $percent . "%</br>";
		$count++;
	}
?>