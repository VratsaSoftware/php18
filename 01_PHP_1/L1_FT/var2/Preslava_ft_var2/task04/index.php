<meta charset="utf-8">
<form action="" method="post">
	<input type="text" name="text">
	<input type="submit" name="submit">
</form>
<?php 
$str =$_POST['text'];
function string_replace_caracters($str){
$arr = explode(' ', $str);
echo "<pre>";
var_dump($arr);
echo "</pre>";
$count = count($arr);
for( $i = 0; $i < $count; $i++ ){
	$current_length = strlen( $arr[$i] );
	$arr[$i] = str_split($arr[$i]);
			
		for( $j = 1; $j < $current_length; $j=$j + 2 ){
			
			$arr[$i][$j] = ord($arr[$i][$j])+1 ;
			$arr[$i][$j] = chr($arr[$i][$j]);
		}
		for( $p = 0; $p < $current_length; $p=$p + 2 ){
			
			$arr[$i][$p] = ord($arr[$i][$p])-1 ;
			$arr[$i][$p] = chr($arr[$i][$p]);
		}

		$arr[$i] = implode('', $arr[$i]);

	
}

$str = implode(' ', $arr);
echo $str;
}

string_replace_caracters($str);