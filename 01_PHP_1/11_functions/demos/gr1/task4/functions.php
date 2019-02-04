<?php 

function array_gen($value, $rows, $cols, $grow){
	$arr = [];
	for($i = 0; $i < $rows; $i++){
		for($j = 0; $j < $cols; $j++){
			$arr[$i][$j] = $value;
			$value += $grow;
		}
	}

	return $arr;
}

function print_array_in_table($arr, $rows, $cols){
	echo "<table border=1>";
	for($m = 0; $m < $rows; $m++){
		echo "<tr>";
		for($n = 0; $n < $cols; $n++ ){
			echo "<td>{$arr[$m][$n]}</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}


