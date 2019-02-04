<?php 

// 1 41 441 4441 44441 444441

// $v = 41;
// $f = 400
// $value = 441;
// $f*10+$value

// 400*10
$arr = [];

for($i = 0; $i < 5; $i++){
	$value = $i+1;
	$v = 4;

	for($j = 0; $j < 4; $j++){
		$arr[$i][$j] = $value;	
		$v = $v*10;	
		$value = $value + $v;
		}
}

echo "<pre>";
var_dump($arr);
echo "</pre>";




