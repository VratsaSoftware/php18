<?php

$arr = [];
$rows = 5;
$cols = 5;
$value = 1;

for($i = 0; $i < $cols; $i++){
	$value = $i*4+1;

	for($k = 0; $k < $rows; $k++){
		$arr[$k][$i] = $value;
		$value++;
	}
}

echo "<table border=1>";

for($m = 0; $m < $cols; $m++){
	echo "<tr>";

	for($n = 0; $n < $rows; $n++){
		echo "<td>{$arr[$m][$n]}</td>";
	}

	echo "</tr>";
}
echo "</table>";
?>

