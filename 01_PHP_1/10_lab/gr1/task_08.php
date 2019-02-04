<?php 

$arr = [1, 8, 0, -12, 7];

$count = count($arr);

$min = $arr[0];

for($i = 1; $i < $count; $i++){
	if($arr[$i] < $min) {
		$min = $arr[$i];
	}
}


