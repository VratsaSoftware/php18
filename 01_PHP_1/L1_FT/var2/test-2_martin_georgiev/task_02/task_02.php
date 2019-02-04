<?php

$array = [
	['Manufacterer' => 'HP', 'Model' => 15, 'CPU' => 4, 'HDD' => 500, 'DR' => 5, 'SSD' => 1, 'LP' => 60, 'P' => 1200, 'D' => 76],
	['Manufacterer' => 'Acer', 'Model' => 'v5', 'CPU' => 2, 'HDD' => 1000, 'DR' => 6, 'SSD' => 1, 'LP' => 30, 'P' => 980, 'D' => 89],
	['Manufacterer' => 'Asus', 'Model' => 'Desire', 'CPU' => 5, 'HDD' => 200, 'DR' => 9, 'SSD' => 0, 'LP' => 76, 'P' => 570, 'D' => 67],
	['Manufacterer' => 'Lenovo', 'Model' => 'Т410', 'CPU' => 8, 'HDD' => 500, 'DR' => 8, 'SSD' => 1, 'LP' => 48, 'P' => 765, 'D' => 43],
	['Manufacterer' => 'Sony', 'Model' => 'a100', 'CPU' => 1, 'HDD' => 1000, 'DR' => 7, 'SSD' => 0, 'LP' => 87, 'P' => 800, 'D' => 76]
];

// add MSC in the array
for ($i = 0; $i < count($array); $i++) {
	$CPU = $array[$i]['CPU'];
	$DR = $array[$i]['DR'];
	$HDD = $array[$i]['HDD'];
	$SSD = $array[$i]['SSD'];
	$P = $array[$i]['P'];
	$LP = $array[$i]['LP'];
	$D = $array[$i]['D'];

	$MSC = ((($CPU + $DR)*1000 + $HDD)*($SSD + 1)/$P)*100 + ($LP+$D);
	$array[$i]['MSC'] = round($MSC, 1);
}

// middle success
$sum_success = 0;

for ($k = 0; $k < count($array); $k++) {
	$sum_success += $array[$k]['MSC'];
}

echo '<p>'.'Средният коефициент на пазарен успех е '.$sum_success/count($array).'</p>';

// table
echo '<table border="1">';

echo '<tr>';
echo '<td>'.'Производител'.'</td>';
echo '<td>'.'Модел'.'</td>';
echo '<td>'.'CPU'.'</td>';
echo '<td>'.'HDD'.'</td>';
echo '<td>'.'Резолюция'.'</td>';
echo '<td>'.'SSD'.'</td>';
echo '<td>'.'Производителност'.'</td>';
echo '<td>'.'Цена в лв.'.'</td>';
echo '<td>'.'Търсене'.'</td>';
echo '<td>'.'Коеф. на пазарен успех'.'</td>';
echo '</tr>';

for ($j = 0; $j < count($array); $j++) {
	echo '<tr>';
	echo '<td>'.$array[$j]['Manufacterer'].'</td>';
	echo '<td>'.$array[$j]['Model'].'</td>';
	echo '<td>'.$array[$j]['CPU'].'</td>';
	echo '<td>'.$array[$j]['HDD'].'</td>';
	echo '<td>'.$array[$j]['DR'].'</td>';
	echo '<td>'.$array[$j]['SSD'].'</td>';
	echo '<td>'.$array[$j]['LP'].'</td>';
	echo '<td>'.$array[$j]['P'].'</td>';
	echo '<td>'.$array[$j]['D'].'</td>';
	echo '<td>'.$array[$j]['MSC'].'</td>';
	echo '</tr>';
}

echo '</table>';

// max success
$max_msc = $array[0]['MSC'];
$max_manufac = $array[0]['Manufacterer'];
$max_model = $array[0]['Model'];

for ($l = 0; $l < count($array); $l++) {
	if ($array[$l]['MSC'] > $max_msc) {
		$max_msc = $array[$l]['MSC'];
		$max_manufac = $array[$l]['Manufacterer'];
		$max_model = $array[$l]['Model'];
	}
}

echo '<p>'.'Лаптопът с най-висок коеф. на пазарен успех е '.$max_manufac.' '.$max_model.' с коеф. '.$max_msc.'</p>';