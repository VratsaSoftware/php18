<?php

$rows = 5;
$cols = 5;
$value = 0;
$arr =[];
$n = 10;
$counter =0;

for ($i=0; $i < $rows; $i++) { 
	$value = ($i+1);
	for ($j=0; $j < $cols; $j++) { 
		$arr[$i][$j] = $value;
		$value+=4;

		
	}
}
echo "<table border=1>";
for ($m=0; $m < $rows; $m++) { 
	echo "<tr>";
	for ($n=0; $n < $cols; $n++) { 
		echo "<td>{$arr[$m][$n]}</td>";
	}
	echo "</tr>";
}
echo "</table>";