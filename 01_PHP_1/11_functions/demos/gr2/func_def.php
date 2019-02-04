<?php 

function print_text(){
	for ($i=0; $i < 10; $i++) { 
		echo "Hello!";
	}
}
echo "<p>";
print_text();
echo "</p>";

echo "<h1>";
print_text();
echo "</h1>";