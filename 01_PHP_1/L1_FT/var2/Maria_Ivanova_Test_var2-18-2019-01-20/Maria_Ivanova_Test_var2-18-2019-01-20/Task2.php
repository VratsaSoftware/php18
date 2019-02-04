<?php

$laptop=[
			['name'=>'Dell','CPU'=>7,'HDD'=>1000,'DR'=>10,'SSD'=>1,'LP'=>70,'P'=>'3000','D'=>90],
			['name'=>'HP','CPU'=>5,'HDD'=>500,'DR'=>4,'SSD'=>0,'LP'=>70,'P'=>'2100','D'=>90],
			['name'=>'Alienware','CPU'=>7,'HDD'=>750,'DR'=>9,'SSD'=>1,'LP'=>70,'P'=>'5000','D'=>90],
			['name'=>'Apple','CPU'=>5,'HDD'=>200,'DR'=>2,'SSD'=>0,'LP'=>70,'P'=>'4200','D'=>90],
			['name'=>'LG','CPU'=>3,'HDD'=>840,'DR'=>8,'SSD'=>0,'LP'=>70,'P'=>'1300','D'=>90],
		];

//MSC = (((CPU + DR)*1000 + HDD)*(SDD + 1)/P)*100 + (LP+D)
$count = count($laptop);
for ($i=0; $i < $count; $i++){ 
	$msc = ((($laptop[$i]['CPU']+$laptop[$i]['DR'])*1000+$laptop[$i]['HDD'])*($laptop[$i]['SSD']+1)/$laptop[$i]['P'])*100+($laptop[$i]['LP']+$laptop[$i]['D']);
	$laptop[$i]['R'] = $msc; //adding the new info into the array
}

//the average msc
$sum_msc=0;
for($j = 0; $j < $count; $j++){
	$sum_msc += $laptop[$j]['R'];
}
$avg_msc = $sum_msc/$count;
echo "<p>Average MSC = ".$avg_msc;

//printing the table
echo "<table border=1>";
echo "<tr>
		<td>Name</td>
		<td>CPU</td>
		<td>HDD</td>
		<td>DR</td>
		<td>SSD</td>
		<td>LP</td>
		<td>Price</td>
		<td>D</td>
		<td>MSC</td>
	</tr>";
for($k = 0; $k < $count; $k++){
	echo "<tr>";
	foreach ($laptop[$k] as $value) {
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
echo "</table>";

//finding the best laptop
$max_msc = $laptop[0]['R'];
$max_ind = 0;
for($p = 0; $p < $count; $p++){
	if($laptop[$p]['R'] > $max_msc){
		$max_msc = $laptop[$p]['R'];
		$max_ind = $p;
	}
}
echo 'The highest MSC = ' . $max_msc . ' is ' . $laptop[$max_ind]['name'];