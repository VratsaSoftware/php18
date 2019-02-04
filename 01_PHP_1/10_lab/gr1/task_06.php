<?php 

$arr = [];
$sum = 0;
$num_of_temps = 90;

for($i = 0; $i < $num_of_temps; $i++){
	$arr[] = rand(0, 50);
}

for($k = 0; $k < $num_of_temps; $k++){
	$sum = $sum + $arr[$k];
}

$avg_temp = $sum/$num_of_temps;

echo $avg_temp;

$arr_high = sort($arr);

$lowest_temp = 5;
for($m = 0; $m < $lowest_temp; $m++){
	echo $arr[$m] . ' / ';
}

rsort($arr);
$highest_temp = 5;

echo 'Highest temps ';
for($n = 0; $n < $highest_temp; $n++){
	echo $arr[$n] . ' // ';
}
echo "<pre>";
var_dump($arr);
echo "</pre>";

echo "<pre>";
var_dump($arr_high);
echo "</pre>";

