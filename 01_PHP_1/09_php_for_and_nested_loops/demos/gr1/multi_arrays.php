<?php 

$arr = [1, 2, 3];
$arr_multi = [
				[1, 2, 3, 5],
				[2, 5,],
				[8, 6, 0, 5, 9],
			];

echo $arr_multi[2][0];

$cars = [
		['brand' => 'WV', 'avg_price' => 20000 ],
		['brand' => 'Volvo', 'avg_price' => 30000],
		];

echo $cars[1]['avg_price'];