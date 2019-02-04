<?php

$arr = [];
$rows = 5;
$cols = 4;
$num = 0;

for($i = 0; $i < $rows; $i++){
	for($j = 0; $j < $cols; $j++){
		$arr[$i][$j]= '-';
		$arr[$i][$j+1] = $num;
	}
}

$count = count($arr);

echo "<table border='1'>";
for($m = 0; $m < $count; $m++){
 	echo "<tr>";
 	foreach ($arr[$m] as $value) {
 		echo "<td>".$value."</td>";
 	}
 	echo "</tr>";
}
echo "</table>"; 
