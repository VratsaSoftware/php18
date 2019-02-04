<?php

$text=$_POST['text'];

$arr = explode(' ', $text);
$count = count($arr);

for($j = 0; $j < count($curr_arr); $j++){
	$curr_arr[$j] = ord($curr_arr[$j]);

}		