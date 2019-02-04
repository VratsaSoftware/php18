<?php 

$arr = [];
$rows = 4;
$cols = 6;
$value = 1;

for($i = 0; $i < $rows; $i++){
	$value = $i*5+1;
	for($k = 0; $k < $cols; $k++){

		$arr[$i][$k] = $value;
		$value++;
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