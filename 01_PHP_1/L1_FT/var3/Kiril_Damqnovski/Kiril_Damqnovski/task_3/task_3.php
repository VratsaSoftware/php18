<?php

$rows=6;
$cols=6;
$arr=[];
$num=1;

// Making the array>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
for ($i=0; $i < $rows; $i++) { 
	$num=$i+1;
	for ($j=0; $j < $cols; $j++) { 
		$arr[$i][$j]=$num;
		$num+=(4+$i*10);
	}
}

// Making the table>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
echo "<table border=1>";
for ($k=0; $k < $rows; $k++) { 
	echo "<tr>";
	for ($m=0; $m < $cols ; $m++) { 
		echo "<td>{$arr[$k][$m]}</td>";
	}
	echo "</tr>";
}
echo "</table>";