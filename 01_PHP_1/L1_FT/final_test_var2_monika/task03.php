<?php
$arr = [];
$rows = 5;
$cols=5;
$value = '-';
//$num = 0;

for ($i=0; $i < $rows ; $i++) { 
	for ($j=0; $j < $cols ; $j++) { 
		$arr[$i][$j] = $value;
		//$value+= '-';
		//$arr[$i][$j] = $num;
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

?>