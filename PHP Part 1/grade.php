<?php

for ($i=0; $i<=100; $i++)
{
	$score = rand(50,100);

	if ($score < 70)
		echo "<h1>Your Score: " . $score . "/100 </h1><h2>Your grade is D.</h2></br>";
	else if ($score < 80)
		echo "<h1>Your Score: " . $score . "/100 </h1><h2>Your grade is C.</h2></br>";
	else if ($score < 90)
		echo "<h1>Your Score: " . $score . "/100 </h1><h2>Your grade is B.</h2></br>";
	else
		echo "<h1>Your Score: " . $score . "/100 </h1><h2>Your grade is A.</h2></br>";
}

?>	