<?php

$rowscols = 10;
$x = $rowscols;
echo '<table border=1>';
for ($r=0; $r < $rowscols; $r++) { 
	echo '<tr>';
	for ($c=1; $c <= $rowscols; $c++){
		if ($c == $x) {
			echo '<td>0</td>';
		}else{
		echo '<td>-</td>';
		};
	};
	$x--;
	echo '</tr>';
};
echo '</table>';