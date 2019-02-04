<?php
if (empty($_GET)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Task 4</title>
</head>
<body>
	<form method="get" action="">
		<input type="text" name="text" value="The harder the life, the sweeter the song">
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
}else {
	$text=$_GET["text"];
	$arr=explode(" ", $text);
	$count=count($arr);
	$arr_words=[];
// Here we make every symbol like index>>>>>>>>>>>>>>
	for ($i=0; $i < $count; $i++) { 

		for ($j=0; $j < strlen($arr[$i]); $j++) { 
			$arr_words[$i][$j]=$arr[$i][$j];
			if ($j==0) {
				echo $arr_words[$i][$j];
			}else{
				echo "*";
			}
		}
		echo " ";
	}
}