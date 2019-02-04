<?php 

$m = 10;
$n = 200;
$flag = false;

for($i = $m; $i <= $n; $i++){
	echo '//' . $i;
	for($k = 2; $k < $i; $k++){
		if($i % $k == 0){
			$flag = true;
			break;
		}
	}

	if($flag == false){
		echo ' is a plain number';
	} else {
		$flag = false;
	}

}