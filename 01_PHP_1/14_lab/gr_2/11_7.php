<?php 

$arr1 = [7, 22, 36, 9, 12];
$arr2 = [5, 6, 8];
$arr_sum = [];

$count1 = count($arr1);
$count2 = count($arr2);

if ($count1 > $count2) {
	for ($i=0; $i < $count2; $i++) { 
		$arr_sum[$i] = $arr1[$i] + $arr2[$i];
	}

	for ($j=$count2; $j < $count1; $j++) { 
		$arr_sum[$j] = $arr1[$j];
	}
}

if ($count2 > $count1) {
	for ($i=0; $i < $count1; $i++) { 
		$arr_sum[$i] = $arr1[$i] + $arr2[$i];
	}

	for ($j=$count1; $j < $count2; $j++) { 
		$arr_sum[$j] = $arr2[$j];
	}
}

if ($count1 == $count2) {
	for ($i=0; $i < $count1; $i++) { 
		$arr_sum[$i] = $arr1[$i] + $arr2[$i];
	}
}

echo "<pre>";
var_dump($arr_sum);
echo "</pre>";