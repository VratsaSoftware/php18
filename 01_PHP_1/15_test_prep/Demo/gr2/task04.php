<form action="#" method="post">
	<input type="text" name="str">
	<input type="submit" name="submit" value="Check">
</form>
<?php

$new_str = '';

if (isset($_POST['submit'])) {

	$str = $_POST['str'];

	if (!empty($str)) {

		$words = explode(' ', $str);
		// var_dump($words);
		for ($i = 0; $i < count($words); $i++) {
			
			$letters = str_split($words[$i]);
			// var_dump($letters);
			// var_dump(strlen($words[$i]));
			if (strlen($words[$i]) % 2 == 0) {
				for ($j = 0; $j < count($letters); $j++) {
					echo $new_str;
					echo "<p></p>";
					$new_str .= ord($letters[$j]).' ';
				}
			} else {
				

				for ($k = 0; $k < count($letters); $k++) {
					$new_str .= $letters[$k].$letters[$k].' ';
					echo $new_str;
				echo "<p></p>";
				}
			}
		}
	}
}

echo $new_str;