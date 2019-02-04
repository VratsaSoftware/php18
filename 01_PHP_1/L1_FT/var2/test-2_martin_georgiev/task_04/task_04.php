<!DOCTYPE html>
<html lang="en">
<head>
	<title>Text Changer</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Set your sentence!</h2>
	<form action="#" method="post">
		<input type="text" name="str">
		<input type="submit" name="submit" value="Change letters">
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$str = $_POST['str'];
	if (!empty($str)) {
		echo '<p>';
		$words = explode(' ', $str);

		for ($i = 0; $i < count($words); $i++) {
			$letters = str_split($words[$i]);

			for ($j = 0; $j < count($letters); $j++) {
				if ($j % 2 == 0) {
					$letters[$j] = chr(ord($letters[$j]) - 1);
				} else {
					$letters[$j] = chr(ord($letters[$j]) + 1);
				}
			}
			echo implode('', $letters).' ';
		}
		echo '</p>';
	}
}


