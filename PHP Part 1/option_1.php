
<?php

	function print_nums($x)
	{
		switch ($x)
		{
			case 1:
				echo '1<br>';
				break;
			case 2:
				echo '12<br>';
				break;
			case 3:
				echo '123<br>';
				break;
			case 4:
				echo '1234<br>';
				break;
			case 5:
				echo '12345<br>';
				break;
			case 6:
				echo '123456<br>';
				break;
			case 7:
				echo '1234567<br>';
				break;
			default:
				break;
		}
	}

	$max = 7;
	for ($i=1; $i<=$max; $i++)
	{
		print_nums($i);	
	}

	for ($i=$max-1; $i>0; $i--)
	{
		print_nums($i);	
	}

?>




