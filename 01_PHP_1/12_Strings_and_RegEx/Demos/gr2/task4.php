<?php 

$str = 'Take a shot';

for($i = 0; $i < strlen($str)/2; $i++){
	if(strtolower($str[$i]) == 't'){
		if(ctype_lower($str[$i])){
			$str[$i] = 'v';
		} else {
			$str[$i] = 'V';	
		}
		
		
	}
}

echo $str;