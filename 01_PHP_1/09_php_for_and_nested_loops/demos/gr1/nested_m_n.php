<?php 

$rows = 2;
$cols = 5;

echo '<table border=1>';

for($i=0; $i<$rows; $i++){
	echo '<tr>';
	for ($k=0; $k < $cols; $k++) { 
		echo "<td>";
		echo $i . ' + ' . $k;
		echo "</td>";
	}
	echo '</tr>';
}
echo '</table>';