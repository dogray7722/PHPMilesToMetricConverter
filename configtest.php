<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quick PHP Test</title>
</head>
<body>
	<h1>This is regular HTML</h1>
		<?php 

	/*Although you can use either double quotes or single quotes, it is recommended to use doubles. */

	echo "Another string<br />";

	echo 'And another<br />';

	$greeting = "Hello";
	$target = "World";
	$phrase = $greeting . " " . $target;
	echo $phrase;


	 ?>
</body>
</html>