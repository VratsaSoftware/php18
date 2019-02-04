<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task1</title>
</head>
<body>
	<form method=get action =''>
		<p>Моля въведете вашата възраст</p>
		<input type="number" name="age">
		<input type="submit" name="submit">
	</form>
</body>
</html>


<?php


if (!empty($_GET['age'])){
	$age = $_GET['age'];
if ($age > 18) {
	echo "<ul>
	 <li>Вода</li>
	 <li>Кола</li>
	 <li>Фанта</li>
	 <li>Ракия</li>
	 <li>Бира</li>
	 </ul>";
}else {
	echo "<ul>
	 <li>Вода</li>
	 <li>Кола</li>
	 <li>Фанта</li>


	</ul>";
}
}