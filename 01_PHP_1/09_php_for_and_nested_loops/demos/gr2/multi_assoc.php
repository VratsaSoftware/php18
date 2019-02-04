<?php 

$cars = [
	['brand' => 'VW', 'model' => 'polo'],
	['brand' => 'Audi', 'model' => 'A6'],
	['brand' => 'BMW', 'model' => 'X5'],
	];

echo $cars[1]['model'];	

$cars_assoc = [
	'best_car' => ['brand' => 'VW', 'model' => 'polo'],
	'worst_car' => ['brand' => 'Audi', 'model' => 'A6'],
	'avg_car' => ['brand' => 'BMW', 'model' => 'X5'],
	];

	$cars_assoc['worst_car']['model'];