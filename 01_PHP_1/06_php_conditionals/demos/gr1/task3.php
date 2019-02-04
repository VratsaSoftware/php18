<?php 

$a = 33;
$b = 19;

// if( ( ($a*$b) % 2 ) == 0 ) {
// 	echo 'четно';
// } else {
// 	echo 'нечетно';
// }

if ( $a*$b == 0 ) {

	echo 'zero';

} elseif ( $a*$b != 0 ){

	if( ( ($a*$b) % 2 ) == 0 ) {
		echo 'четно';
	} else {
		echo 'нечетно';
	}//end if ($a*$b) % 2
}//end if $a*$b == 0