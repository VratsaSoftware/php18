<?php 

$arr = [];

for($i = 0; $i < 10; $i++){
	$arr[] = $i*$i;
}

$count = count($arr);

for($k = 0; $k < $count; $k++){

	echo $arr[$k] . ' / ';
}

for($m = 0; $m < $count; $m+=2){

	echo $arr[$m] . ' / ';
}

for($p = 0; $p < $count; $p++){
	$arr[$p] += 10;
}

for($n = 0; $n < $count; $n++){

	echo $arr[$n] . ' / ';
}