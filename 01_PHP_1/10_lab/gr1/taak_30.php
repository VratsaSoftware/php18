<?php 

$students = [
	['name' => 'Student 1', 'math'=>6, 'physics'=>5, 'english'=>5, 'IT'=>6],
	['name' => 'Student 2', 'math'=>5, 'physics'=>5, 'english'=>4, 'IT'=>4],
	['name' => 'Student 3', 'math'=>3, 'physics'=>4, 'english'=>5, 'IT'=>6],
	['name' => 'Student 4', 'math'=>6, 'physics'=>5, 'english'=>2, 'IT'=>4],
	['name' => 'Student 5', 'math'=>2, 'physics'=>6, 'english'=>5, 'IT'=>5],
];

$sum = 0;

//avg each student

for($i = 0; $i < count($students); $i++){
	$curent_student = $students[$i];

	$avg_grade = ($curent_student['math'] + $curent_student['physics']+$curent_student['english'] + $curent_student['IT'])/4;

	$curent_student['avg_grade'] = $avg_grade;
	
	$students[$i] = $curent_student;

	$sum = $sum + $avg_grade;
}

$min = $students[0]['avg_grade'];
$max = $students[0]['avg_grade'];

for($n = 0; $n < count($students); $n++){
	if($students[$n]['avg_grade'] < $min){
		$min = $students[$n]['avg_grade'];
	}

	if($students[$n]['avg_grade'] > $max){
		$max = $students[$n]['avg_grade'];
	}
}
// echo "<pre>";
// var_dump($students);
// echo "</pre>";

$avg_all_students = $sum/count($students);

//echo $avg_all_students;

echo $max;
