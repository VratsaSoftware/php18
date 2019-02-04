<?php 

$arr = [];
$rows = 8;
$cols = 7;
$value = 1;

for($i = 0; $i < $rows; $i++){
	$value = 1 + 10*$i;
	for($k = 0; $k < $cols; $k++){
		$arr[$i][$k] = $value;
		$value+= 2;
	}
		
	
}
// echo '<pre>';
// var_dump($arr);
// echo '</pre>';

echo "<table border=1>";
for ($m=0; $m < $rows; $m++) { 
	echo "<tr>";
	for ($n=0; $n < $cols; $n++) { 
		echo "<td>{$arr[$m][$n]}</td>";
	}
	echo "</tr>";
}
echo "</table>";