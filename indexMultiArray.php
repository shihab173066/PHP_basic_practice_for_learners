<?php 


	$blogs = [
		['title' => 'Hello World', 'author' => 'Auni', 'content' => 'Programming'],
		['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
		['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
	];


	$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem'];

	$popped = array_pop($blogs);

	print_r($blogs); // print preview

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo $blogs[1]['title']; // 

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<p><br></p>

</body>
</html>