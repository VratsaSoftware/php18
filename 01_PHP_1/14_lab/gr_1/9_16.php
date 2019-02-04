<?php 
$arr = [0, 1, 1, 5, 5, 7, 8, 55, 8, 8, 9, 0];

sort($arr);
$max = 1;
$counter = 1;
$num = $arr[0];

$count = count($arr);
for($i = 1; $i < $count; $i++){

	if ($arr[$i] == $arr[$i-1]) {
		$counter++;
	} else {
		if($max < $counter){
			$num = $arr[$i-1];
			$max = $counter;
		}
		$counter = 1;
	}
}

echo $max;
echo "-";
echo $num;

