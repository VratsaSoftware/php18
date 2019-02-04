<meta charset="utf-8">
<?php  
$laptops = [
	['laptop' => 'HP', 'CPU' =>7, 'HDD' => 1000, 'DR' => 9, 'SSD' => 1, 'LP' => 50, 'P' => 1200, 'D' => 10],
	['laptop' => 'Lenovo', 'CPU' => 3, 'HDD' => 1000, 'DR' => 4, 'SSD' => 0, 'LP' => 40, 'P' => 1900, 'D' => 20],
	['laptop' => 'Dell', 'CPU' => 5, 'HDD' => 500, 'DR' => 7, 'SSD' => 1, 'LP' => 10, 'P' => 1500, 'D' => 30],
	['laptop' => 'Samsung', 'CPU' => 3, 'HDD' => 500, 'DR' => 9, 'SSD' => 0, 'LP' => 20, 'P' => 1600, 'D' => 40],
	['laptop' => 'Toshiba', 'CPU' => 7, 'HDD' => 1000, 'DR' => 2, 'SSD' => 1, 'LP' => 60, 'P' => 1700, 'D' => 50],
];
echo "<p>Коефициента на пазарен успех на всеки лаптоп е:</p>";


  




$count = count($laptops);
//MSC = (((CPU + DR)*1000 + HDD)*(SDD + 1)/P)*100 + (LP+D) 
$sumMSC = 0;
for($i = 0; $i < $count; $i++){
	$MSC = ((($laptops[$i]['CPU'] +$laptops[$i]['DR'])*1000 + $laptops[$i]['HDD'])*($laptops[$i]['SSD'] + 1)/$laptops[$i]['P'])*100 + ($laptops[$i]['LP']+$laptops[$i]['D']);
		$laptops[$i]['MSC'] = $MSC;
		$sumMSC += $laptops[$i]['MSC'];
}
echo "<pre>";
var_dump($laptops);
echo "</pre>";



$averageMSC = $sumMSC/$count;
echo "Средния коефициент на пазарен успех за лаптопите е: $averageMSC";

// table
echo '<table border="1">';
echo '<tr>';
echo '<td>'.'Производител и модел'.'</td>';
echo '<td>'.'Процесор /CPU/'.'</td>';
echo '<td>'.'харддиск/HDD/ '.'</td>';
echo '<td>'.' резолюция на дисплея /DR/ '.'</td>';
echo '<td>'.'SSD'.'</td>';
echo '<td>'.' производителност /LP/ '.'</td>';
echo '<td>'.'  цена /P/ '.'</td>';
echo '<td>'.'  търсене /D/ '.'</td>';
echo '<td>'.'  коефициент на пазарен успех '.'</td>';
echo '</tr>';

for ($j = 0; $j < count($laptops); $j++) {
	echo '<tr>';
	echo '<td>'.$laptops[$j]['laptop'].'</td>';
	echo '<td>'.$laptops[$j]['CPU'].'</td>';
	echo '<td>'.$laptops[$j]['HDD'].'</td>';
	echo '<td>'.$laptops[$j]['DR'].'</td>';
	echo '<td>'.$laptops[$j]['SSD'].'</td>';
	echo '<td>'.$laptops[$j]['LP'].'</td>';
	echo '<td>'.$laptops[$j]['P'].'</td>';
	echo '<td>'.$laptops[$j]['D'].'</td>';
	echo '<td>'.$laptops[$j]['MSC'].'</td>';
	echo '</tr>';
}
echo '</table>';


$maxMSC = $laptops[0]['MSC'];
$maxindex = 0;

for($p = 1; $p<$count; $p++){
	if($laptops[$p]['MSC'] > $maxMSC){
		$maxMSC = $laptops[$p]['MSC'];
		$maxindex = $p;
	}
	
}
echo 'Производителя и модела лаптоп с най-висок коефициент на пазарен успех е ' . $laptops[$maxindex]['laptop'] . ' и индексът му е ' . $maxindex;




