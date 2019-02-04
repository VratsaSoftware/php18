<?php

$arr = [];
$rows = 5;
$cols = 4;
$value = 1;

for($i = 0; $i < $rows; $i++){
	$value = $i*7+7;
	for($k = 0; $k < $cols; $k++){
		$arr[$i][$k] = $value;
		$value+= 110;
	}
}

echo "<table border=1>";
for($m = 0; $m < $rows; $m++){
	echo "<tr>";
	for($n = 0; $n < $cols; $n++){
		echo "<td>{$arr[$m][$n]}</td>";
	}
	echo "</tr>";
}
echo "</table>";