<?php 

$str = 'тест';

function split($str, $len = 1) {

    $arr		= [];
    $length 	= mb_strlen($str, 'UTF-8');

    for ($i = 0; $i < $length; $i += $len) {

        $arr[] = mb_substr($str, $i, $len, 'UTF-8');

    }

    return $arr;

}

// var_dump(split($str));


for($p = 0; $p < strlen($str); $p++){
	
	echo $str[$p];

}

var_dump(str_split($str));