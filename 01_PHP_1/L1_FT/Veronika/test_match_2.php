<?php

$array = [
		['name' => 'Anna', 'age' => 15, 'hight' => 161, 'weight' => 48],
		['name' => 'Raya', 'age' => 18, 'hight' => 165, 'weight' => 52],
		['name' => 'Mira', 'age' => 16, 'hight' => 168, 'weight' => 55],
		['name' => 'Mila', 'age' => 14, 'hight' => 165, 'weight' => 47],
		['name' => 'Nika', 'age' => 17, 'hight' => 163, 'weight' => 51]
];

echo '<h1>' . "Индексът за телесна маса е" . '</h1>';

$middle_itm = 0;

for ($i = 0; $i < count($array); $i++){
	$age = $array[$i]['age'];
	$hight = $array[$i]['hight'];
	$weight = $array[$i]['weight'];

	$itm = pow ($hight * 3 + $weight * 2) / $age * 3;
	$itm = round ($itm, 1);

	$array[$i]['itm'] = $itm;
	echo '<p>' . $array[$i]['name'] . ' - ' . $itm . '</p>';

	$middle_itm += $itm;
}
echo '<p>' . "ИTM:" . $middle_itm/count($array) . '</p>';


echo '<table border = "1">';
echo '<tr>';
echo '<td>' . 'Name' . '</td>';
echo '<td>' . 'Age' . '</td>';
echo '<td>' . 'Hight' . '</td>';
echo '<td>' . 'Weight' . '</td>';
echo '<td>' . 'ITM' . '</td>';
echo '</tr>';

for ($j = 0; $j < count($array); $j++){
	echo '<tr>';
	echo '<td>' . $array [$j]['name'] . '</td>';
	echo '<td>' . $array [$j]['age'] . '</td>';
	echo '<td>' . $array [$j]['hight'] . '</td>';
	echo '<td>' . $array [$j]['weight'] . '</td>';
	echo '<td>' . $array [$j]['itm'] . '</td>';
	echo '</tr>';
}
echo '</table>';


$min = $array[0]['itm'];
$min_name = $array[0]['name'];

for ($k = 0; $k < count($array); $k++){
	
	if ($array[$k]['itm'] < $min){
		$min = $array [$k]['itm'];
		$min_name = $array[$k]['name'];
	}
}
echo '<p>' . "Човекът с най-нисък ITM е:" . $min_name . '.' . '</p>';


