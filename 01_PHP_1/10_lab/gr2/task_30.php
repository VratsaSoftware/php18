<?php 

$st = [
['name' => 'Student 1', 'mark1' => 6, 'mark2' => 4, 'mark3' => 6, 'mark4' => 4],
['name' => 'Student 2', 'mark1' => 6, 'mark2' => 5, 'mark3' => 3, 'mark4' => 4],
['name' => 'Student 3', 'mark1' => 6, 'mark2' => 2, 'mark3' => 6, 'mark4' => 4],
['name' => 'Student 4', 'mark1' => 2, 'mark2' => 5, 'mark3' => 3, 'mark4' => 4],

];

$count = count($st);

for($i = 0; $i < $count; $i++){
	$avg_gr = ($st[$i]['mark1'] + $st[$i]['mark2'] + $st[$i]['mark3'] + $st[$i]['mark4'])/4;
	$st[$i]['avg_grade'] = $avg_gr;
}

// echo "<pre>";

// var_dump($st);

// echo "</pre>";

$sum = 0;

for($k = 0; $k < $count; $k++){
	$sum = $sum + $st[$k]['avg_grade'];
}

$avg_of_all = $sum/$count;

echo $avg_of_all;
