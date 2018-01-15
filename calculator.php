<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Go Metric Already</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="margin-left: 15px">
 	<?php
 		//Define variables if submit button is pressed. 
 		if(isset($_POST['submit'])){
 			$miles = $_POST['miles'];
			$metric = $_POST['metric'];
 		}
	 ?> 

	<h1>Mile Conversion Calculator</h1>
	<h3>Convert miles to kilometers, meters, or centimeters.</h3>

	<hr>
	
	<form class="navbar-form" action="calculator.php" method="post">		
		<h4>Enter miles:</h4>
		<!-- Define number input and allow decimal entries. -->
			<input type="number" name="miles" step="0.01" required></p><br>
		<h4>Choose a conversion:</h4></p>
		
		<div style="padding: 10px">
		<!-- Define kilometers and set as default checked value. -->
		<input type="radio" name="metric"
		value="kilometers" checked="checked"
 			<?php
 				// If selected, maintain selection on submit.
				if ($_POST && $metric == 'kilometers') {echo 'checked';}
			?>
		> kilometers<br>

		<!-- Define meters input selection, and maintain selection on submit. -->
		<input type="radio" name="metric"
		value="meters"
			<?php
			if($_POST && $metric == 'meters') {echo 'checked';}
			?>
		> meters<br> 

		<!-- Define centimeters input selection, and maintain selection on submit. -->
		<input type="radio" name="metric"
		value="centimeters"
			<?php
				if ($_POST && $metric == 'centimeters') {echo 'checked';}
			?>
		> centimeters
		</div>

		<br><br>
		<input type="submit" class="btn btn-primary" name="submit">
		<br><br>
		<hr>
	</form>

	<div style="font-size: 18px">
	<?php
		//Convert miles to kilometers, and format appropriately.
		if ($metric == "kilometers") 
		{          
    		$kilometers = $miles * 1.61;
    		$total = number_format($kilometers, 2);
    		print $miles . ' miles is ' . $total . ' kilometers.';      
		}
		//Convert miles to meters.
		elseif ($metric == "meters") 
		{
			$meters = $miles * 1609.344;
			$total = number_format($meters, 3);
			print $miles . ' miles is ' . $total . ' meters.';
		}
		//Conversion convert miles to centimers.
		elseif ($metric == "centimeters") 
		{
			$centimeters = $miles * 160934;
			$total = number_format($centimeters, 3);
			print $miles . ' miles is ' . $total . ' centimeters.';
		}
	?>
	</div>
</body>
</html>