<?php 
$people = [
	['name' => 'Мария', 'age' => 10, 'height' => 165, 'weight' => 45],
	['name' => 'Петя', 'age' => 20, 'height' => 170, 'weight' => 50],
	['name' => 'Камелия', 'age' => 30, 'height' => 175, 'weight' => 55],
	['name' => 'Валентина', 'age' => 40, 'height' => 180, 'weight' => 60],
	['name' => 'Александра', 'age' => 50, 'height' => 185, 'weight' => 65],
		];
		//ИТМ = (ръст*3 – тегло*2)/възраст3
		// ITM = (((heigh*3) - (weight*2))/(age*3))
		//((JF+D)2+C*2)/P
$count = count($people);
for ($i=0; $i < $count; $i++) { 
	$current_r = ((($people[$i]['height']*3)-($people[$i]['weight']*2))/($people[$i]['age']*3));
	$people[$i]['r'] = $current_r;
}
$sum_r = 0;
for($j = 0; $j < $count; $j++){
	$sum_r += $people[$j]['r'];
}
$avg_r = $sum_r/$count;
echo "Средният ИТМ на всички хора е:" . $avg_r;

echo "<table border=1>";
echo "<tr>
		<td>Име</td>
		<td>Възраст</td>
		<td>Ръст</td>
		<td>Тегло</td>
		<td>ИТМ</td>
	</tr>";
for($k = 0; $k < $count; $k++){
	echo "<tr>";
	foreach ($people[$k] as $value) {
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
echo "</table>";
$min_result = $people[0]['r'];
$min_index = 0;
for($p = 0; $p < $count; $p++){
	if($people[$p]['r'] < $min_result){
		$min_result = $people[$p]['r'];
		$min_index = $p;
	}
}


echo "ИТМ на " . $people[$min_index]['name'] . " е " . $min_result . " и тя има най-ниско ИТМ от всички хора в масива! :) ";