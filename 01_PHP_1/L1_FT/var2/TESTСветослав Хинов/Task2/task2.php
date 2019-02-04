<?php 

$laptops = [
	['laptop' => 'model1', 'CPU' => 3, 'HDD' => 500, 'DR' => 3, 'SSD' => 0, 'LP'=> 30, 'P'=>1500, 'D'=>10],
	['laptop' => 'model2', 'CPU' => 3, 'HDD' => 1000,'DR' => 5, 'SSD' => 1, 'LP'=> 15, 'P'=>900,  'D'=>40],
	['laptop' => 'model3', 'CPU' => 5, 'HDD' => 320, 'DR' => 1, 'SSD' => 1, 'LP'=> 65, 'P'=>1200, 'D'=>90],
	['laptop' => 'model4', 'CPU' => 7, 'HDD' => 500, 'DR' => 10,'SSD' => 1, 'LP'=> 45, 'P'=>750,  'D'=>35],
	['laptop' => 'model5', 'CPU' => 7, 'HDD' => 250, 'DR' => 8, 'SSD' => 0, 'LP'=> 70, 'P'=>1600, 'D'=>70],
		];

	//MSC = (((CPU + DR)*1000 + HDD)*(SDD + 1)/P)*100 + (LP+D)

$count=count($laptops);

for ($i=0; $i < $count ; $i++) { 
	$MSC=((($laptops[$i]['CPU'] + $laptops[$i]['DR'])*1000 + $laptops[$i]['HDD'])*($laptops[$i]['SSD'] + 1)
	/$laptops[$i]['P'])*100 + ($laptops[$i]['LP'] + $laptops[$i]['D']);
	$laptops[$i]['MSC']=$MSC;
}
$avr_success=0; 

for ($j=0; $j < $count ; $j++) { 
	$avr_success+=$laptops[$j]['MSC'];
}
$avr_MSC=$avr_success/$count;
	echo $avr_MSC;

echo "<table border=1>";
echo "<tr>
	    <td>Производител/Модел</td>
		<td>Процесор</td>
		<td>Харддиск</td>
		<td>Резолюция</td>
		<td>Памет</td>
		<td>Производителност</td>
		<td>Цена</td>
		<td>Търсене</td>
		<td>Пазарен успех</td>
	</tr>";

for($k = 0; $k < $count; $k++){
	echo "<tr>";
	foreach ($laptops[$k] as $name => $value) {
		echo "<td>$name.$value</td>";
	}
	echo "</tr>";
}
echo "</table>";

$mаx_MSC = $laptops[0]['MSC'];
$max_ind = 0;

for($p = 0; $p < $count; $p++){
	if($laptops[$p]['MSC'] > $mаx_MSC){
		$mаx_MSC = $laptops[$p]['MSC'];
		$max_ind = $p;

	}

}

echo 'Производителя и модела с най-висок коефициент MSC = ' . $max_MSC . ' е ' . $laptops[$max_ind]['laptop'];