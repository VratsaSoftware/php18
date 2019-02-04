<?php 

function print_text($limit, $string){
	for ($i=0; $i < $limit; $i++) { 
		echo $string;
	}
}

$text = "some text";

print_text(15, $text);