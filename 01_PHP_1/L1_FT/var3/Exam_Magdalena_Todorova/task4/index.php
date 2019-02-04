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
		for ($i = 0; $i < count($words); $i++) {
			$letters = str_split($words[$i]);
			if (strlen($words[$i]) % 2 == 0) {
				for ($j = 0; $j < count($words); $j++) {
					$new_str .= str_replace($letters[$j], $str, "*" ).' ';
				}
			} else {
				for ($k = 0; $k < count($letters); $k++) {
					$new_str .= $letters[$k].$letters[$k].' ';
				}
			}
		}
	}
}

echo $new_str;