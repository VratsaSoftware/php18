<?php

$str = $_POST['text'];

function transform_string($param) {

$arr = explode(' ', $param);

$count = count($arr);

for ($i=0; $i < $count; $i++) { 

	$curr_word = $arr[$i];
	$curr_len = strlen($curr_word);
	$curr_arr = str_split($curr_word);
	// var_dump($curr_arr); 

	if ($curr_len == 2) {
		for ($j=0; $j < count($curr_arr); $j++) { 
			$curr_arr[$j] ++;
		}
		$curr_word = implode('  ', $curr_arr);
		// echo "$curr_word";
	} else {
	        for ($j=0; $j < count($curr_arr); $j++) { 
			$curr_arr[$j] --;
		}
		$curr_word = implode('  ', $curr_arr);
  }
  $arr[$i] = $curr_word;
}
 $param = implode(' ', $arr );
  echo "$param";
 }
 transform_string($str);
 ?>