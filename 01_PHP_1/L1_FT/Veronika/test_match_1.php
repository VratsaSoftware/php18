<form method = "post" action = "test_match_1.php">
<input type = "number" name = "age" placeholder = "enter your age...">
<input type = "submit" name = "submit" value = "submit">
</form>
	
<?php

if(!empty($_POST)){
$age = $_POST ['age'];

if ($age < 18){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Drinks</title>
</head>
<body>
	<h1>Choose product</h1>
 		<ul>
 			<li>Coca Cola</li>
 			<li>Fanta</li>
			<li>Sprite</li>
 			<li>Juice</li>
 			<li>Milk</li>
			<li>Tea</li>
		</ul>
</body>
</html>

<?php
} elseif ($age >= 18){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Drinks</title>
</head>
<body>
	<h1>Choose product</h1>
		<ul>
			<li>Wine</li>
			<li>Vodka</li>
			<li>Whiskey</li>
			<li>Tequila</li>
			<li>Beer</li>
			<li>Jin</li>
		</ul>
</body>
</html>

<?php
}
}