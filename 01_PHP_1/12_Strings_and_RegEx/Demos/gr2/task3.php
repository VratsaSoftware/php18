<?php 

$str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde officia assumenda ea autem dolore! Alias magni placeat, in, odit hic iste quo atque neque nemo voluptatum possimus esse dolorum excepturi.';

$len = strlen($str);

for($i = 0; $i < $len; $i++){
	if(ord($str[$i]) >= 65 && ord($str[$i]) <= 90){
	echo $str[$i].' ';
	$str[$i]= '*';
}
}

echo $str;