Напишете програма, която замества буквите в думите от дадено изречение със знак – например *, #, _, оставяйки само първата буква от всяка. 
Резултатът трябва да бъде стринг. 
Изречението и знакът, с който ще бъдат замествани буквите, се подават през форма.




<form method = "post" action = "test_match_4.php">
<input type = "text" name = "text" placeholder = "enter your text...">
<input type = "text" name = "symbol" placeholder = "enter your symbol...">
<input type = "submit" name = "submit" value = "submit">
</form>
	
<?php

if(!empty($_POST)){
$str = $_POST ['text'];
$symbol = $_POST ['symbol'];

$words = explode (' ', $str);

for ($i = 0; $i < count ($words); $i++){
	$letters = str_split($words[$i]);
	
	if ($i >= 1){
		$str = str_replace ($letters, $symbol , $str);
	}
	echo $str;
}

}