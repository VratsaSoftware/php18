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
		$count = count($words);
		for ($i=0; $i < $count; $i++) { 
			$letters = str_split($words[$i]);
			$count_let = count($letters);
			for ($j=0; $j < $count_let; $j++) { 
				if (($j % 2 == 0 ) || ($j == 0)) {
					$ascii_letter = ord($letters[$j]);
					$ascii_letter = $ascii_letter - 1;
					$char_letter = chr($ascii_letter);
					$letters[$j] = $char_letter;
				} else {
					$ascii_letter = ord($letters[$j]);
					$ascii_letter = $ascii_letter + 1;;
					$char_letter = chr($ascii_letter);
					$letters[$j] = $char_letter;
				};

			}
			$letters2 = implode('', $letters);
			$words_new[$i] = $letters2;
		}

		$new_str = implode(' ', $words_new);
		echo $new_str;
	}
}