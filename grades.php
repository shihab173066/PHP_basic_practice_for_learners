<?php

function grade()
{
	for($i = 75; $i <= 100; $i++)
	{
		$marks = $i;

		if($marks >= 90 && $marks <= 100)
		{
			echo "Your grade is: A Marks = $marks<br />";
		}
		else if($marks >= 80 && $marks <= 89)
		{
			echo "Your grade is: B Marks = $marks<br />";
		}
		else
		{
			echo "Your grade is: F Marks = $marks<br />";
		}	
	}	
}

echo "Start <br/>";
grade();
echo "End";




?>


<!DOCTYPE html>
<html>
<head>
	<title>UIU Grading System</title>
</head>
<body>

</body>
</html>