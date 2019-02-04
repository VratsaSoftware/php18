

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task4</title>
</head>
<body>
	<form method="get" action="">
		<input type="text" name="text">
		<input type="submit" name="submit">

	</form>
</body>
</html>


<?php


$str = $_GET['text'];

$arr = explode(' ',$str);

// var_dump($arr);

$count = count($arr);


for ($i=0; $i < $count; $i++) { 
	preg_replace(pattern, @, $arr);
}
