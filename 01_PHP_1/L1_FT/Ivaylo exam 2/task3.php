<?php 

$arr = [];
$rows = 4;
$cols = 6;
$value = 3;

for($i = 0; $i < $rows; $i++){
	$value = $i*3+4;
	for($k = 0; $k < $cols; $k++){

		$arr[$i][$k] = $value;
		$value++;
	}

	$value = $i*4+3;

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
