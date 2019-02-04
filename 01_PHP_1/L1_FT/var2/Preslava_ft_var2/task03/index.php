<?php 
$cols = 5;
$rows = 5;
$str = "";
$strlen = strlen($str);
$arr=[];
for ($i=0; $i < $rows; $i++) { 
	$str = '-';
	for ($p=0; $p <$cols ; $p++) { 
		$arr[$i][$p] = $str;
		$str = $strlen;
	}
}
echo "<table border=1>";
for ($k=0; $k < $rows; $k++) { 
	echo "<tr>";
	for ($b=0; $b <$cols ; $b++) { 
		echo "<td>";
		echo "{$arr[$k][$b]}";
		echo "</td>";
	}
	echo "</tr>";
}
echo "<table>";
?>