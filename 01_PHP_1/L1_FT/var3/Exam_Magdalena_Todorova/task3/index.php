<?php
$arr = [];
$cols = 5;
$rows = 5;
$number = 1;

for ($i=0; $i < $cols; $i+= 1) { 
    $number = ($i + 1);
    for ($k=0; $k < $rows ; $k++) { 
        $arr[$i][$k] = $number;
        $number += 4;
    }
}
echo '<table border=1>';
    for ($m=0; $m < $cols; $m++) { 
        echo '<tr>';
        for ($n=0; $n < $rows; $n+= 1) { 
        echo "<td>{$arr[$m][$n]}</td>";
        }
        echo '</tr>';
    }  
echo '</table>';