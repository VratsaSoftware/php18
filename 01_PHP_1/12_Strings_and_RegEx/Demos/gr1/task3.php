<?php 

$str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eligendi, ipsam culpa placeat illum repellendus voluptas earum quo, maiores ducimus, quos sunt! Animi odio itaque distinctio laborum, cum minima delectus.';

$arr = str_split($str);

// foreach ($arr as $char) {
// 	if(ord($char) >= 65 && ord($char) <= 90)
// 	 echo $char.'-';
// }

for($i = 0; $i < strlen($str); $i++){
	// if(ord($str[$i]) >= 65 && ord($str[$i]) <= 90){
	//   $str[$i]= '-';
	// }

	if($i % 2 == 0){
		$str[$i]= '-';
	}
}

echo $str;