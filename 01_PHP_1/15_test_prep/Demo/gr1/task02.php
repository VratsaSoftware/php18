<?php 

$men = [
	['name' => 'name1', 'jf' => 50, 'd' => 90, 'c' => 600, 'p' => '30'],
	['name' => 'name2', 'jf' => 60, 'd' => 100, 'c' => 250, 'p' => '300'],
	['name' => 'name3', 'jf' => 10, 'd' => 1, 'c' => 10, 'p' => '500'],
	['name' => 'name4', 'jf' => 110, 'd' => 10, 'c' => 105, 'p' => '200'],
	['name' => 'name5', 'jf' => 105, 'd' => 61, 'c' => 150, 'p' => '300'],
		];


		//((JF+D)2+C*2)/P

$count = count($men);

for ($i=0; $i < $count; $i++) { 
	$current_r = (($men[$i]['jf']+$men[$i]['d'])*($men[$i]['jf']+$men[$i]['d']) + $men[$i]['c']*2)/$men[$i]['p'];

	$men[$i]['r'] = $current_r;
}

$sum_r = 0;

for($j = 0; $j < $count; $j++){
	$sum_r += $men[$j]['r'];
}

$avg_r = $sum_r/$count;

echo $avg_r;

echo "<table border=1>";
echo "<tr>
		<td>Name</td>
		<td>Junk Food</td>
		<td>Soda</td>
		<td>Comp</td>
		<td>Sport</td>
		<td>R</td>
	</tr>";
for($k = 0; $k < $count; $k++){
	echo "<tr>";
	foreach ($men[$k] as $value) {
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
echo "</table>";

$min_r = $men[0]['r'];
$min_ind = 0;

for($p = 0; $p < $count; $p++){
	if($men[$p]['r'] < $min_r){
		$min_r = $men[$p]['r'];
		$min_ind = $p;
	}
}

echo 'The men with lowest R = ' . $min_r . ' is ' . $men[$min_ind]['name'];