<?php

$laptop = [['pr'=>'aser','model'=> 'model1', 'CPU'=> 3, 'HDD' => 1000,'DR' => 6, 'SSD'=>1, 'LP'=> 20, 'P'=> 700, 'D' =>10],
           ['pr'=>'hp',  'model'=> 'model2', 'CPU'=> 5, 'HDD' => 500, 'DR' => 7, 'SSD'=>1, 'LP'=> 30, 'P'=> 800, 'D' =>40],
           ['pr'=>'win', 'model'=> 'model3', 'CPU'=> 3, 'HDD' => 1000,'DR' => 8, 'SSD'=>1, 'LP'=> 10, 'P'=> 900, 'D' =>20],
           ['pr'=>'Comp','model'=> 'Model4', 'CPU'=> 7, 'HDD' => 500, 'DR' => 9, 'SSD'=>1, 'LP'=> 40, 'P'=> 750, 'D' =>80],
           ['pr'=>'drive','model'=>'model5', 'CPU'=> 3, 'HDD' => 1000,'DR' => 5, 'SSD'=>1, 'LP'=> 20, 'P'=> 1000,'D' =>30],
            ];

// var_dump($laptop);     
$count = count($laptop);

// MSC = (((CPU + DR)*1000 + HDD)*(SDD + 1)/P)*100 + (LP+D)
for ($i=0; $i < $count ; $i++) { 
	$msc = ((($laptop[$i]['CPU'] + $laptop[$i]['DR'])*1000 + $laptop[$i]['HDD'])*($laptop[$i]['SSD']+1)/$laptop[$i]['P'])*100 + 
	(($laptop[$i]['LP']+$laptop[$i]['D'])/100);
	$laptop[$i]['MSC'] = $msc;
}

$sum_msc = 0;
for ($j=0; $j < $count; $j++) { 
	$sum_msc += $laptop[$j]['MSC'];
}
$avr_msc = $sum_msc/$count;


echo "<table border=1 >";
echo "<tr>
      <td>Pr</td>
      <td>Model</td>
      <td>CPU</td>
      <td>HDD</td>
      <td>DR</td>
      <td>SDD</td>
      <td>LP/%</td>
      <td>PRICE/lv</td>
      <td>D/%</td>
      <td>MSC</td>";
echo "</tr>";
  for ($k=0; $k < $count; $k++) { 
  	echo "<tr>";
  	 foreach ($laptop[$k] as  $value) {
  	 	echo "<td>$value</td>";
  	 }
  	 echo "</tr>";
  }
echo "</table>";      
echo 'Средният коефициент на пазарен успех е ' . $avr_msc . '.';

$max_msc = $laptop[0]['MSC'];
$max_k = 0;

for ($p=0; $p < $count; $p++) { 
	if ($laptop[$p]['MSC'] > $max_msc) {
		$max_k = $laptop[$p]['MSC'];
		$max_ind = $p;
	}
}
echo "<pre>";
echo 'С най-висок коефициент ' . $max_k .  '  на пазарен успех е производител  '   .  $laptop[$max_ind]['pr'] . '  с модел лаптоп  '    . $laptop[$max_ind]['model'] . '.';
echo "</pre>";