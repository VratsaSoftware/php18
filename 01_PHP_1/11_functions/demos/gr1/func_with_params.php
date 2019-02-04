<?php 

function print_text($param1, $param2){
	for($i = 0; $i < $param1; $i++){
		echo $param2;
	}
}

$text = 'Demo text';
print_text(10, $text);