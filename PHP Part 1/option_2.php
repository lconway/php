
<?php

	function convert_number($numeric_value)
	{
		echo "Numeric value = " . $numeric_value . "<br>Result = ";
		if ($numeric_value % 2)
			echo $numeric_value * 3 + 1;
		else
			echo $numeric_value/2;
		
		echo "<br>";
	}

	$n = rand(1, 100);
	convert_number($n);

?>




