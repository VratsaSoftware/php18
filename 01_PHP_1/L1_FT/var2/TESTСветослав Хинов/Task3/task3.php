<?php

$arr=[];
$rows="5";
$cols="5";
$num="-";
$a="0";

for ($i=0; $i < $rows ; $i++) { 
	for ($j=0; $j < $cols ; $j++) { 
	$arr[$i][$j]=$num;
	$num++;
	}	
if ($num=max($arr[$i])) {
		$arr[$i][4]=$a;	 
	}
}
echo "<table border=1>";
for ($k=0; $k < $rows; $k++) {
	echo "<tr>"; 
	for ($l=0; $l < $cols ; $l++) { 
		echo "<td>" .$arr[$k][$l]. "</td>";
	}
	echo "</tr>";
}
echo "</table>";