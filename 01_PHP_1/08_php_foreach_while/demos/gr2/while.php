<?php 

$n = 1;

$limit = 50;

echo '<p>';
while($n <= $limit){

	echo $n . ' ';
	if($n % 5 == 0){
		echo '</p><p>';
	}
	$n++;
}
echo '</p>';