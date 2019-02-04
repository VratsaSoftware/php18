<?php 

function array_generate($rows, $cols, $num, $grow){
	$array = [];
	for($i = 0; $i < $rows; $i++){
		for($j = 0; $j < $cols; $j++){
			$array[$i][$j] = $num;
			$num+= $grow;
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