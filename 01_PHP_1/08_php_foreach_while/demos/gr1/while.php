<?php 

$x = 1;
$n = 46;
// echo '<p>';
// while( $x <= $n ){
// 	echo $x . ' // ';
// 	if($x % 5 == 0){
// 		echo '</p><p>';
// 	}
// 	$x++;
// }
// echo '</p>';


// var 2
$count = 0;

echo '<p>';
while( $x <= $n ){
	echo $x . ' // ';
	$count++;
	if($count == 5){
		echo '</p><p>';
		$count = 0;
	}
	
	$x++;
}
var_dump($count);
echo '</p>';