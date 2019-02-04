<?php
if (empty($_GET)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pub</title>
</head>
<body>
	<form method="get" action="">
		<input type="number" name="age">
		<input type="submit" name="submit" value="Check">
	</form>
</body>
</html>
<?php

// Here we make the check if you are adult>>>>>>>>>>>>>>>>>>>>
}elseif ($_GET["age"]>=18) {
	echo "<li> Menu:";
			echo "<ul>Beer 2$</ul>";
			echo "<ul>Vodka 3$</ul>";
			echo "<ul>Burger 3$</ul>";
			echo "<ul>Water 1$</ul>";
		echo "</li>";
}elseif ($_GET["age"]<18) {
	echo "<li> Menu:";
			echo "<ul>Cola 2$</ul>";
			echo "<ul>Fanta 2$</ul>";
			echo "<ul>Burger 3$</ul>";
			echo "<ul>Water 1$</ul>";
		echo "</li>";
}