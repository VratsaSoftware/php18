<?php

$rows = 5;
$cols = 5;
$num = 1;
$arr = [];

for($i = 0; $i < $rows; $i++){
	$num = 1*($i+1);
	for($j = 0; $j < $cols; $j++){


		$arr[$i][$j] = $num;
		$num += 4;		
	}
	}


echo "<table border=1>";
 for($r = 0; $r < $rows; $r++){
 	echo "<tr>";
 	for($d = 0; $d < $cols; $d++){
 		echo "<td>{$arr[$r][$d]}</td>";
 	}
 	echo "</tr>";
 }
echo "</table>";