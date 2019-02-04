<?php

$laptops = [
	['model'=>'Toshiba X500', 'CPU'=>'3', 'HDD'=>'1000', 'DR'=>'3', 'SSD'=>'1', 'LP'=>'0.60', 'P'=>'1250', 'D'=> '0.15'],
	['model'=>'Sony Vaio4', 'CPU'=>'5', 'HDD'=>'500', 'DR'=>'2', 'SSD'=>'0', 'LP'=>'0.40', 'P'=>'800', 'D'=> '0.60'],
	['model'=>'DELL XP100', 'CPU'=>'7', 'HDD'=>'500', 'DR'=>'7', 'SSD'=>'0', 'LP'=>'0.70', 'P'=>'750', 'D'=> '0.47'],
	['model'=>'Asus M50', 'CPU'=>'5', 'HDD'=>'700', 'DR'=>'4', 'SSD'=>'1', 'LP'=>'0.55', 'P'=>'800', 'D'=> '0.27'],
	['model'=>'Lenovo L600', 'CPU'=>'3', 'HDD'=>'1000', 'DR'=>'9', 'SSD'=>'0', 'LP'=>'0.67', 'P'=>'1000', 'D'=> '0.86'],
];

$count = count($laptops);
for ($i=0; $i < $count; $i++) { 
	$MSC = ((($laptops[$i]['CPU'] + $laptops[$i]['DR']) * 1000 + $laptops[$i]['HDD']) * (($laptops[$i]['SSD'] + 1) / $laptops[$i]['P'])) * 100 + ($laptops[$i]['LP'] + $laptops[$i]['D']);
	$laptops[$i]['MSC'] = $MSC;
};

$avr_MSC = 0;
for ($j=0; $j < $count; $j++) { 
	$avr_MSC = $avr_MSC + $laptops[$j]['MSC'];
};
$avr_MSC = $avr_MSC / $count;
echo 'The average MSC is ' . $avr_MSC;

echo '<table border="1">';
echo '<tr>';
echo '<td>'.'Производител и модел'.'</td>';
echo '<td>'.'Процесор'.'</td>';
echo '<td>'.'Харддиск'.'</td>';
echo '<td>'.'Резолюция на дисплея'.'</td>';
echo '<td>'.'SSD'.'</td>';
echo '<td>'.'Производителност'.'</td>';
echo '<td>'.'Цена'.'</td>';
echo '<td>'.'Търсене'.'</td>';
echo '<td>'.'Коеф. на пазарен успех'.'</td>';
echo '</tr>';
for ($k = 0; $k < $count; $k++) {
	echo '<tr>';
	echo '<td>'.$laptops[$k]['model'].'</td>';
	echo '<td>'.$laptops[$k]['CPU'].'</td>';
	echo '<td>'.$laptops[$k]['HDD'].'</td>';
	echo '<td>'.$laptops[$k]['DR'].'</td>';
	echo '<td>'.$laptops[$k]['SSD'].'</td>';
	echo '<td>'.$laptops[$k]['LP'].'</td>';
	echo '<td>'.$laptops[$k]['P'].'</td>';
	echo '<td>'.$laptops[$k]['D'].'</td>';
	echo '<td>'.$laptops[$k]['MSC'].'</td>';
	echo '</tr>';
}
echo '</table>';

$best = $laptops['0']['MSC'];
$best_ind = 0;
for ($l=0; $l < $count; $l++) { 
	if ($best < $laptops[$l]['MSC']){
		$best = $laptops[$l]['MSC'];
		$best_ind = $l;
	};
};

echo 'The laptop with best MSC is ' . $laptops[$best_ind]['model'];