<?php

$arr = [];
$rows = 5;
$colons = 5;
$value = 1;

for ($i = 0; $i < $rows; $i++){
	$arr[$i] = $value;
	$value ++;
	
	for ($j = 0; $j < $colons; $j++){
		$arr[$i][$j] = $value;
		$value += ($j+4);
		$value += 10;
	}
}

echo "<table border = 1>";
for ($m = 0; $m < $rows; $m++){
	echo "<tr>";
	for ($n = 0; $n < $colons; $n++){
		echo "<td>{$arr[$m][$n]}</td>";
	}
	echo "</tr>";
} 

echo "</table>";
 