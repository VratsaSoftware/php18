<?php

$arr = [];
$rows = 6;
$cols = 6;
$num = 1;

for ($i=0; $i < $rows; $i++) {
	$num = $i * 3 + 1;
	for ($k=0; $k < $cols; $k++) { 
		$arr[$i][$k] = $num;
		$num+=15;
	}
}

echo '<table border="1">';
for ($m=0; $m < $rows; $m++) { 
	echo '<tr>';
	for ($n=0; $n < $cols; $n++) { 
		echo '<td>' . $arr[$m][$n] . '</td>';
	}
	echo '</tr>';
}
echo '</table>';