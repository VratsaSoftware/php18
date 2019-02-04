<?php

$str = $_POST['input_text'];
$len = strlen($str);

for($i = 0; $i < $len; $i++){

	if(ord($str[$i]) <= 90){
		echo $str[$i].'***';
		$str[$i]= '****';
}
}

echo $str;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>This not work</title>
</head>
<body>
	<form action="task_4.php" method="post" class="form_age">
		<textarea name="input_text" placeholder="Enter a sentansce"></textarea>
		<input type="submit" name="submit" value="Check">
	</form>
</body>
</html>


