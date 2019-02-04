<?php 

function array_generate($rows, $cols, $num){
	$array = [];
	for($i = 0; $i < $rows; $i++){
		for($j = 0; $j < $cols; $j++){
			$array[$i][$j] = $num;
			$num++;
		}
	}

	return $array;
}

function print_array_in_table($arr, $rows, $cols){
	echo "<table border=1>";
	for($i = 0; $i < $rows; $i++){
		echo "<tr>";
		for($j = 0; $j < $cols; $j++){
			echo "<td>{$arr[$i][$j]}</td>";
		}

		echo "</tr>";
	}
	echo "</table>";
}

$new_arr = array_generate(5, 6, 10);

print_array_in_table($new_arr, 5, 6);
