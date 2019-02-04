<?php 

$rows = 4;
$cols = 4;

$num = 1;
$arr = [];

for ($i=0; $i < $rows; $i++) { 
	$num = 1;
	$p = 0;	
	$arr[$i] = [];
	while($p < $i){
		$arr[$i][] = 0;
		$p++;
	}
	$m = $p;
	while ($m < $cols) {
		$arr[$i][] = $num;
		$num++;
		$m++;
	}
}

echo "<table border=1>";
for($k = 0; $k < $rows; $k++){
	echo "<tr>";
	for ($t=0; $t < $cols ; $t++) { 
		echo "<td>".$arr[$k][$t]."</td>";
	}
	echo "</tr>";
}
echo "</table>";