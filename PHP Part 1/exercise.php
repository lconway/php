
<?php

	$names = array('Lynn', 'Brooklynn', 'Sam', 'Hanna', 'Jasper');
	$max = count($names);
	for ($i=0; $i<$max; $i++)
	{
		$index = 0;
		$name = $names[$index];
		for ($j=$index+1; $j<$max; $j++)
		{
			if (strlen($names[$j]) > strlen($name[$i]))
			{
				echo "i = " . $i . "  name[i] = " . $name[$i] . "  j = " . $j . "name[j] = " . $names[$j]. "   name = " .$name .  "<br>";
				$names[$i] = $names[$j];
				$names[$j] = $name;
				$name = $names[$i];
			}
		}
	}
	var_dump($names);
?>




