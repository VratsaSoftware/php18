<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>What is the weather</title>
</head>
<body>
	<form action="weather_action.php" method="post">
		<p>Въведете датата(число от 1 до 30) тук:</p>
		<input type="number" name="date">
		<input type="submit" name="submit">
	</form>
	<?php 
	include 'weather_action.php';
	?>
</body>
</html>