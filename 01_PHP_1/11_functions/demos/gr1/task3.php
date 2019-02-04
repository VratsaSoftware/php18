<?php 

function array_gen($value, $rows, $cols){
	$arr = [];
	for($i = 0; $i < $rows; $i++){
		for($j = 0; $j < $cols; $j++){
			$arr[$i][$j] = $value;
			$value++;
		}
	}

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

array_gen(1, 5, 4);

