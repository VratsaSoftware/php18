<?php 

$el = 100;
$index = 0; 
$arr = [];
$count = 1;

while($index < $el){
	$current_num = rand(0, 100);
	//echo $current_num . ' / ';
	$count++;
	if($current_num % 2 == 0){
		$arr[] = $current_num;
		$index++;
	}
}

// echo $count;
// echo "<pre>";
// var_dump($arr);
// echo "</pre>";
$sum = 0; 

echo "<table border=1>";
for($i = 0; $i < count($arr); $i++){
	$sum = $sum + sqrt($arr[$i]);

	echo "<tr>";
	echo "<td>$arr[$i]</td>";
	echo "<td>".round(sqrt($arr[$i]), 2)."</td>";
	echo "<td>".$sum."</td>";
	echo "</tr>";
}
echo "<tr><td></td><td>$sum</td></tr>";
echo "</table>";

