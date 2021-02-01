<?php 

	$stringOne = 'my email is ';
	$stringTwo = 'shihab.hossain@gmail.com';

	echo $stringOne.$stringTwo;

	$name = 'auni';

	// concatenation
	echo 'Hey, my name is '.$name;

	echo "Hey, my name is $name"; 

	echo "the man is like \"yoo\"";
	echo 'the boy is like "heyyy"';

	echo $name[1];

	echo strlen($name);
	echo strtoupper($name);
	echo strtolower($name);
	echo str_replace('m', 'w', $name);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p><?php echo $name; ?></p>

</body>
</html>