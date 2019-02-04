<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
			<p> Write your text here... </p>
		<textarea name="text"></textarea>
			<p> Write the symbol here </p>
		<textarea name="symbol"></textarea>
			<p>
		<input type="submit" name="submit">
			</p>
	</form>
</body>
</html>

<?php 
if (!empty($_POST)) {
$symbol = $_POST['symbol'];
$text = $_POST ['text'];

echo str_replace("text", "symbol", "");


}
//echo $text;
