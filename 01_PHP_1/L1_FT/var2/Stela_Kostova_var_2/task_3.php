<?php

$arr = [];
$rows = 5;
$cols = 5;
$num = '-';
$value = 0;

for ($i=0; $i < $rows; $i++) { 
	$num ;
	$p = 0;	
	$arr[$i] = [];
	while($p < $i){
		$arr[$i][] = $num;
		$p++;
	}
	$m = $p;
	while ($m < $cols) {
	  $arr[$i][] = $p;
		$num;

		$m++; 
	}
}

echo "<table border = 1>";
 for ($m=0; $m < $rows; $m++) { 
 	echo "<tr>";
 	  for ($n=0; $n < $cols; $n++) { 
 	  	echo "<td>{$arr[$m][$n]}</td>";
 	  }
 	  echo "</tr>";
 }
echo "</table>";
