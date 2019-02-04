<?php 
$x = 1;
$count = 0;

echo '<p>';
while( $x <= 100 ){
	if( $x % 2 != 0){
		
		echo $x . ' // ';	
		$count++;
	}

	if($count == 5){
		echo '</p><p>';
		$count = 0;
	}
	
	$x++;
}
echo '</p>';