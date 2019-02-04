<?php 
$f_current_2 = 0;
$f_current_1 = 1;


$n = 10;
$i = 3;
//f = fпредпредп + fпредп;
while($i <= $n){
	//i = 7, f_current ?, $f_current_2 = 3, $f_current_1 = 5;
	$f_current = $f_current_2 + $f_current_1;
	$f_current_2 = $f_current_1;
	$f_current_1 = $f_current;
	$i++;
}

echo $f_current;

