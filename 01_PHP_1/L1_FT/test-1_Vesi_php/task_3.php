<?php

$arr = [];
$rows = 6;
$cols = 6;
$num = 1;

for ($i=0; $i < $rows; $i++) { 
	$num = $i * 3 + 1;
	for ($o=0; $o < $cols; $o++) { 
		$arr[$i][$o] = $num;
		$num+= 15;
	}
}

echo '<table border = "1">';
 for ($s=0; $s < $rows ; $s++) { 
 	echo '<tr>';
 for ($n=0; $n < $cols; $n++) { 
 		echo '<td>' . $arr[$s][$n] . '</td>';
 	}
 	echo '</tr>';	
 }
 echo '</table>';