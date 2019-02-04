<?php

$array=[
		['name'=>'Kiril','age'=>'30','weight'=>'80','height'=>'190',],
		['name'=>'Svetli','age'=>'28','weight'=>'89','height'=>'180',],
		['name'=>'Pako','age'=>'26','weight'=>'90','height'=>'200',],
		['name'=>'Koko','age'=>'24','weight'=>'70','height'=>'220',],
		['name'=>'Moko','age'=>'22','weight'=>'78','height'=>'170',],
];

// ITM = (height*3 – weight*2)/age^3>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// Here we create the ITM index>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
for ($i=0; $i < count($array); $i++) { 
	$ITM=(($array[$i]['height']*3)-($array[$i]['weight']*2))/(($array[$i]['age'])*($array[$i]['age'])*($array[$i]['age']));
	$array[$i]['ITM']=$ITM;
}

// Here we find the avereg sum "ITM" for all persons>>>>>>>>>>>>
$sum_ITM=0;
for ($i=0; $i < count($array); $i++) { 
	$sum_ITM+=$array[$i]['ITM'];
}
$avr_ITM=$sum_ITM/count($array);

echo $avr_ITM;

// Making the table>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
echo "<table border=1>";
echo "<tr>
		<td>Name</td>
		<td>Age</td>
		<td>Weight</td>
		<td>Height</td>
		<td>ITM</td>
	</tr>";
for($i = 0; $i < count($array); $i++){
	echo "<tr>";
	foreach ($array[$i] as $value) {
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
echo "</table>";

// Finding the person with lowest ITM>>>>>>>>>>>>>>>>>>>>>>>>>>>
$min_ITM = $array[0]['ITM'];
$min_name = 0;

for($i = 0; $i < count($array); $i++){
	if($array[$i]['ITM'] < $min_ITM){
		$min_ITM = $array[$i]['ITM'];
		$min_name = $i;
	}
}

echo 'The men with lowest ITM = '.$min_ITM.' is '.$array[$min_name]['name'].' yo.';