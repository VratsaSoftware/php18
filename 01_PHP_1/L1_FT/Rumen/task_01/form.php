<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p> Insert your age </p>
	<form action="" method="post" >
		<input type="number" name="number">
		<input type="submit" name="submit">		
	</form>
</body>
</html>

<?php
if (!empty($_POST)) {
$number = $_POST['number'];
if ($number<18) {
	?>
	<html>
	<ul> Sprite </ul>
	<ul> Fanta </ul>
	<ul> Coca Cola </ul>
	<ul> Cappy (различни вкусове) </ul>
	<ul> Фреш от портокал </ul>

	</html>


<?php
}
else
{
	?>
	<html>
	<ul> Мента </ul>
	<ul> Уиски </ul>
	<ul> Ракия </ul>
	<ul> Вино </ul>
	</html>
	<?php
}
}
?>