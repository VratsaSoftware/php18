<?php
$arr = [];
$cols = 5;
$rows = 5;
$number = 10;

for ($i=0; $i < $cols; $i+= 1) { 
    $number = '-';
    for ($k=0; $k < $rows ; $k+= 1) { 
        $arr[$i][$k] = $number;
    }
}
echo '<table border=1>';
    for ($m=0; $m < $cols; $m+= 1) { 
        echo '<tr>';
        for ($n=0; $n < $rows ; $n+= 1) { 
        echo "<td>{$arr[$m][$n]}</td>";
        }
        echo '</tr>';
    }  
echo '</table>';
// var_dump($arr);
