<?php 
$number = 1;
for ($i=0; $i < 30; $i++) { 
	echo '<p>';
	for($k = 0; $k < 10; $k++){
		echo $number . ' ';
		$number++;
	}
	echo '</p>';
}