<!DOCTYPE html>
<html lang="bg">
<head>
	<title>Какво е времето?</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Кой ден от месеца сме? (0-30)</h2>
	<form action="php_code.php" method="post">
		<input type="number" name="num" min="0" max="30">
		<input type="submit" name="check">
	</form>
</body>
</html>

<?php
include 'php_code.php';
?>