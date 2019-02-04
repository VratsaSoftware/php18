<?php

$age = $_POST['age'];

if (($age >= 18) && ($age <= 65)) {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>List for drinks</title>
</head>
<body>
		<!-- Form -->
		<form action="task_1.php" method="post" class="form_age">
			<input type="number" name="age" placeholder="Enter your age">
			<input type="submit" name="submit" value="Show list of drinks">
		</form>

	<!--  List of drinks for 18+  -->
<div class="alcohol_drinks">
	<h2>Hello! You have a 18+ years. We have for you this drinks:</h2>

	<ul>
		<li>Beer</li>
		<li>Mint</li>
		<li>Ouzo</li>
		<li>Vodka</li>
		<li>Whiskey</li>
	</ul>

</div>
</body>
</html>

<?php

} elseif ($age >= 65) {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>List for drinks</title>
</head>
<body>

	<!-- Form -->
		<form action="task_1.php" method="post" class="form_age">
			<input type="number" name="age" placeholder="Enter your age">
			<input type="submit" name="submit" value="Show list of drinks">
		</form>

	<!-- List of non-alcohol drinks -->
	<div class="non_alcohol_drinks">
	<h2>Hello! You have a 65+. We have for you this drinks:</h2>

	<ul>
		<li>Orange fresh</li>
		<li>Coca-cola</li>
		<li>Tea</li>
		<li>Water</li>
		<li>Juice - Peach, Orange, Apple</li>
		<li>Beer</li>
	</ul>



	
</div>
</body>
</html>

<?php
} else {
	?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>List for drinks</title>
</head>
<body>

	<!-- Form -->
		<form action="task_1.php" method="post" class="form_age">
			<input type="number" name="age" placeholder="Enter your age">
			<input type="submit" name="submit" value="Show list of drinks">
		</form>

	<!-- List of non-alcohol drinks -->
	<div class="non_alcohol_drinks">
	<h2>Hello! You have under 18. We have for you this drinks:</h2>

	<ul>
		<li>Orange fresh</li>
		<li>Coca-cola</li>
		<li>Tea</li>
		<li>Water</li>
		<li>Juice - Peach, Orange, Apple</li>
	</ul>
	<?php
}
