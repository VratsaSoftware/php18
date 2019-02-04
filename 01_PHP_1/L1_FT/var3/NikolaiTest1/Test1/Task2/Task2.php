<?php


// Дефинирайте масив, който пази информация за пет човека  - техните имена, възраст, ръст, тегло. Изчислете за всеки човек индексът му за телесна маса /ИТМ/ по формулата – ИТМ = (ръст*3 – тегло*2)/възраст3 и добавете този коефициент към информацията, която съхранявате в масива. 
// Намерете средния ИТМ за всички хора, за които имате информация в масива и го отпечатайте.
// Отпечатайте информацията, която съхранявате в масива под формата на таблица, като всяка колона трябва да има название – име, възраст, ръст и т. н. 
// Намерете и отпечатайте името на човека с най-нисък ИТМ. 12 т.


$arr = [
		['name' => 'Ivan', 'age' => 18, 'hight' => 166, 'weight' => 101],
		['name' => 'Stoqn', 'age' => 22, 'hight' => 180, 'weight' => 66],
		['name' => 'Petkan', 'age' => 25, 'hight' => 185, 'weight' => 76],
		['name' => 'Rosen', 'age' => 26, 'hight' => 175, 'weight' => 80],
		['name' => 'Gorg', 'age' => 30, 'hight' => 200, 'weight' => 105],
	   ];



$count = count($arr);

for ($i=0; $i < $count; $i++) { 
	$ITM= (($arr[$i]['hight']*3) - 
		   ($arr[$i]['weight']*2))/
		   ($arr[$i]['age']*$arr[$i]['age']*$arr[$i]['age']);
	$arr[$i]['ITM'] = $ITM;
}

// var_dump($arr);

$sum_ITM = 0;

for ($j=0; $j < $count; $j++) { 
	$sum_ITM += $arr[$j]['ITM'];
}

$avg_ITM = $sum_ITM / $count;

echo 'AVG ITM is =' . round($avg_ITM, 3);

echo "<table border=1>";

echo "<tr>
		<td>Име</td>
		<td>Възраст</td>
		<td>Ръст</td>
		<td>Тегло</td>
		<td>ИТМ</td>
	 </tr>";
	 for ($m=0; $m < $count; $m++) { 
	 	echo "<tr>";
	 	foreach ($arr[$m] as $value) {
	 		echo "<td>$value</td>";
	 	}
	 	echo "</tr>";
	 }
echo "</table";

$min_itm = $arr[0]['ITM'];
$min_itm_individ =0;

for ($n=0; $n < $count; $n++) { 
	if ($arr[$n]['ITM'] < $min_itm) {
		$min_itm = $arr[$n]['ITM'];
		$min_itm_individ = $n;
	}
}
echo "<p></p>";
echo 'The man with lowest ITM is' . $arr[$min_itm_individ]['name'];