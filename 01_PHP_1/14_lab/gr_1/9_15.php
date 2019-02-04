<?php 

$arr = [2, 9, 15, 0, 7, -96, -95, 0, -18];

$counter = 1;
$max_length = 1;

$count = count($arr);

for($i = 1; $i < $count; $i++){
	if($arr[$i] > $arr[$i-1]){
		$counter++;
	} else {
		if($max_length < $counter){
			$max_length = $counter;
		}
		$counter = 1;
	}
}

echo $max_length;