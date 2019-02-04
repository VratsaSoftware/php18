<?php 

$arr = [-10, 8, -90, 0];

$min = $arr[0];
$min_ind = 0;

for($i = 1; $i < count($arr); $i++){
	if($min > $arr[$i]){
		$min = $arr[$i];
		$min_ind = $i;
	}
}

echo $min;
echo $min_ind;