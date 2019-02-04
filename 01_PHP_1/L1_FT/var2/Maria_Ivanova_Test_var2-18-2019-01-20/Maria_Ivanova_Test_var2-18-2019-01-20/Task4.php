<?php

$str=$_GET['str'];

$arr = explode(' ', $str);
$count = count($arr);
for($i = 0; $i < $count; $i++){
	$curr_word = $arr[$i];
	$curr_len = strlen($curr_word);
	$curr_arr = str_split($curr_word);
	if($curr_len % 2 == 0){
		for($j = 0; $j < count($curr_arr); $j++){
			
		}	
	}
}

