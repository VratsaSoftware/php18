<?php 
//a
$email = 'rayy@example.com';

$arr = explode('@', $email);

//var_dump($arr);

echo $arr[0];

//b

$str = '\"\1+2/3*2:2-3/4*3';

$str = str_replace(['\\', '"', '/', '+', '*', ':', '-'], ' ', $str);

echo $str;

//c

$text = 'Която селектира определен брой думи в началото на стринга – броят се подава с параметър.';


function select_words($num, $str){
	$arr = explode(' ', $str);
	for($i = 0; $i < $num; $i++){
		echo $arr[$i];
		echo "-";
	}
}

select_words(3, $text);