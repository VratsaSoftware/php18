<?php
$rows = 5;
$cols = 5;
$num = 0;
$arr =
	['name' => 'Krasimir', 'age' => '21' , 'height' => 185,  'weight' => 65]

	['name' => 'Ivan', 'age' =>  '20'  , 'height' => 175, 'weight' => 70],

	['name' => 'Dimitar' , 'age' => '21' , 'height' => 180 , 'weight' => 80],

    ['name' => 'Ivailo', 'age' => '22' , 'height' => 173,  'weight' => 85],

   ['name' => 'Borislav', 'age' => '17' , 'height' => 190,  'weight' => 90],

 $count = count($arr);

for ($i=0; $i < $count; $i++) { 
	$indexitm = (($arr[$i]['height']-$arr[$i]['weight']*2)/$arr[$i]['age'];


}
  	
  } 
// ИТМ=(ръст*3–тегло*2)/възраст3

echo "<table border=1>";
echo "<tr>
		<td>name</td>
		<td>age</td>
		<td>height</td>
		<td>weight</td>
		
	</tr>";




     






