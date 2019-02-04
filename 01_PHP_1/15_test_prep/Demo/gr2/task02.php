<?php

// JF - броя на ядените вредни храни
// D - изпитите газирани напитки в литри
// C - часове пред компа
// P - спортуване в часове

$array = [
	['name' => 'Peter', 'JF' => 5, 'D' => 3, 'C' => 8, 'P' => 1],
	['name' => 'Alex', 'JF' => 2, 'D' => 1, 'C' => 3, 'P' => 2],
	['name' => 'Nikola', 'JF' => 13, 'D' => 4, 'C' => 6, 'P' => 1],
	['name' => 'Mitko', 'JF' => 0, 'D' => 6, 'C' => 2, 'P' => 3],
	['name' => 'Denis', 'JF' => 0, 'D' => 2, 'C' => 4, 'P' => 2],
];

echo '<h1>'.'Рискът от затлъстяване и развиване на някакво заболяване'.'</h1>';

$middle_r = 0;
for ($i = 0; $i < count($array); $i++) {
	$jf = $array[$i]['JF'];
	$d = $array[$i]['D'];
	$c = $array[$i]['C'];
	$p = $array[$i]['P'];

	$r = (pow($jf + $d, 2) + $c * 2) / $p;
	$r = round($r, 1);

	$array[$i]['R'] = $r;
	echo '<p>'.$array[$i]['name'].' - '.$r.'</p>';

	$middle_r += $r;
}

echo '<p>'.'Среден риск: '.$middle_r/count($array).'</p>';

// table
echo '<table border="1">';
echo '<tr>';
echo '<td>'.'Име'.'</td>';
echo '<td>'.'Вредна храна'.'</td>';
echo '<td>'.'Вредни напитки'.'</td>';
echo '<td>'.'Време пред компа'.'</td>';
echo '<td>'.'Спортуване'.'</td>';
echo '</tr>';

for ($j = 0; $j < count($array); $j++) {
	echo '<tr>';
	echo '<td>'.$array[$j]['name'].'</td>';
	echo '<td>'.$array[$j]['JF'].'</td>';
	echo '<td>'.$array[$j]['D'].'</td>';
	echo '<td>'.$array[$j]['C'].'</td>';
	echo '<td>'.$array[$j]['P'].'</td>';
	echo '</tr>';
}
echo '</table>';

// min_risk
$min = $array[0]['R'];
$min_name = $array[0]['name'];
for ($k = 0; $k < count($array); $k++) {
	if ($array[$k]['R'] < $min) {
		$min = $array[$k]['R'];
		$min_name = $array[$k]['name'];
	}
}

echo '<p>'.'Човекът с най-малък риск е '.$min_name.'.'.'</p>';