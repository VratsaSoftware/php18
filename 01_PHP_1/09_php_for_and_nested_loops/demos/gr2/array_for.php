<?php 

$arr = [0, 25, 89, 74, 32, 8, 96, 12, 85];

$count = count($arr);

//echo $count;

for($i = 0; $i < $count; $i++){
	$arr[$i] = $arr[$i] + 10;
	//$arr+=10;
	echo $arr[$i] . ' // ';
}