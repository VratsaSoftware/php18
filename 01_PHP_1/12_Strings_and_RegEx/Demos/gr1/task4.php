<?php 

$str = 'amet, consactetur adipisicing elit';


for($i = 0; $i < strlen($str)/2; $i++){
	
	if($str[$i] == 'a'){
		$str[$i]= 'u';
	}
	if($str[$i] == 't'){
		$str[$i]= 'v';
	}

}

for($p = strlen($str)/2; $p < strlen($str); $p++){
	
	if($str[$p] == 'e'){
		$str[$p]= 'o';
	}

	if($str[$p] == 's'){
		$str[$p]= 'p';
	}
}



echo $str;

'/(\(\d{3}\))\s(\d{2}-?){3}/'