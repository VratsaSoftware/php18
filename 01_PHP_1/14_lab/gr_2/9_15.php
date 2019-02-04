<?php 

$input = [2, 9, 15, 0, 7, -96, -95, 0, 18];

function find_max_increasing_row($arr){
	
	$counter = 1;
	$max  = 1;
	$count = count($arr);

for($i = 1; $i < $count; $i++){	
	if ($arr[$i] > $arr[$i-1]) {
		$counter++;
	} else {
		if($max < $counter){
			$max = $counter;
		}
		$counter = 1;
	}	
}
if($max < $counter){
	$max = $counter;
}
echo $max;
}

find_max_increasing_row($input);
