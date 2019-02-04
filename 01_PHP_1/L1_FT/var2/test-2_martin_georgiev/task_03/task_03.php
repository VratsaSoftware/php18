<?php
echo '<h2>'.'Таблицата на века!'.'</h2>';

$array = [];
$rows = 7;
$cols = 6;
$value = 1;

for ($i = 0; $i < $rows; $i++) {
	$value = $i*(-1)+($cols-1);
	for ($k = 0; $k < $cols; $k++) {
		if ($value == 0) {
			$array[$i][$k] = 0;
		} else {
			$array[$i][$k] = '-';
		}
		$value -= 1;
	}
}

echo '<table border="1">';
for ($m = 0; $m < $rows; $m++) {
	echo '<tr>';
	for ($n = 0; $n < $cols; $n++) {
		echo "<td>{$array[$m][$n]}</td>";
	}
	echo '</tr>';
}
echo '</table>';