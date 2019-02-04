<?php


$array = [
	     ['producer' => 'ASUS', 'model' => 'model1', 'CPU' => 5, 'HDD' => 500, 'DR'=>8, 'SSD' => 0, 'LP' => 55 , 'P' => 956, 'D'=> 35 ],
	     ['producer' => 'HP', 'model' => 'model2', 'CPU' => 7, 'HDD' => 1000, 'DR' => 9, 'SSD' => 1, 'LP' => 90, 'P' => 1500, 'D'=> 85 ],
	     ['producer' => 'ACER', 'model' => 'model3', 'CPU' => 3, 'HDD' => 1000, 'DR' => 10, 'SSD' => 1, 'LP' => 70, 'P' => 1450, 'D'=> 75 ],
	     ['producer' => 'SONY', 'model' => 'model4', 'CPU' => 3, 'HDD' => 500, 'DR' => 5, 'SSD' => 0, 'LP' => 80, 'P' => 1010, 'D'=> 55 ],
	     ['producer' => 'TOSHIBA', 'model' => 'model5', 'CPU' => '5', 'HDD' => '500', 'DR' => 6, 'SSD' => 0, 'LP' => 60, 'P' => 856 , 'D'=> 67],
	     
         ];
//var_dump($array);
 echo '<h1>' . 'Kоефициента на пазарен успех на всеки лаптоп:' . '</h1>';
 echo '<hr>';
$coef = 0;
for ($i = 0; $i < count($array); $i++) {
	$cpu = $array[$i]['CPU'];
	$hdd = $array[$i]['HDD'];
	$dr = $array[$i]['DR'];
	$ssd = $array[$i]['SSD'];
	$lp = $array[$i]['LP'];
	$p = $array[$i]['P'];
	$d = $array[$i]['D'];

    $msc = ((($cpu + $dr)*1000 + $hdd)*($ssd + 1)/$p)*100 + ($lp+$d);
	$msc = round($msc, 1);

	$array[$i]['MSC'] = $msc;
	echo '<p>'.$array[$i]['producer'].' - '.$msc.'</p>';

	$coef += $msc;
}
//var_dump($array);
echo '<hr>';
echo '<h2>'.'Средния коефициент на пазарен успех за лаптопите:'. $msc/count($array).'</h2>';
echo '<hr>';

echo '<table border="1">';
echo '<tr>';
echo '<td>'.'Производител'.'</td>';
echo '<td>'.'Модел'.'</td>';
echo '<td>'.'Процесор'.'</td>';
echo '<td>'.'Харддиск'.'</td>';
echo '<td>'.'Резолюция на дисплея'.'</td>';
echo '<td>'.'SSD'.'</td>';
echo '<td>'.'Производителност'.'</td>';
echo '<td>'.'Цена'.'</td>';
echo '<td>'.'Търсене'.'</td>';
echo '</tr>';

for ($j = 0; $j < count($array); $j++) {
	echo '<tr>';
	echo '<td>'.$array[$j]['producer'].'</td>';
	echo '<td>'.$array[$j]['model'].'</td>';
	echo '<td>'.$array[$j]['CPU'].'</td>';
	echo '<td>'.$array[$j]['HDD'].'</td>';
	echo '<td>'.$array[$j]['DR'].'</td>';
	echo '<td>'.$array[$j]['SSD'].'</td>';
	echo '<td>'.$array[$j]['LP']."%" .'</td>';
	echo '<td>'.$array[$j]['P']. " " . "лв." . '</td>';
	echo '<td>'.$array[$j]['D']."%" .'</td>';
	echo '</tr>';
}
echo '</table>';
echo '<hr>';

$max = $array[0]['MSC'];
$max_name = $array[0]['producer'];
for ($k = 0; $k < count($array); $k++) {
	if ($array[$k]['MSC'] < $max) {
		$max = $array[$k]['MSC'];
		$max_name = $array[$k]['producer'];
		$max_model = $array[$k]['model'];
	}
}

echo '<p>'.'Лаптопа с най-висок коефициент на пазарен успех е'. " ".$max_name. "-" . $max_model . '.'.'</p>';


