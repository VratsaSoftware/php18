<?php 

$number = 65;

function is_armstrong_number($num){

$arr = str_split($number);

$count = count($arr);

$sum = 0;

for ($i=0; $i < $count; $i++) { 
	$sum += pow($arr[$i], 3);
}

if ($sum == $number) {
	
	echo $number . ' is an Armstrong number';

} else {
	
	echo $number . ' is not an Armstrong number';

}
}

is_armstrong_number($number);