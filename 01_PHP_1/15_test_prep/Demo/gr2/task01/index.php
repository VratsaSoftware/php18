<html>

<head>

	<title></title>

</head>

<body>

	<h1>Разход на гориво</h1>



	<form action="php_code.php" method="post">

		<div>

			<label>При нормални условия</label>

			<input type="number" name="cost">

			<label>L/100 km</label>

		</div>

		<div style="margin-top: 2%;">

			<label>Условие:</label>

			<select name="conditionals">

				<option>Снежна покривка</option>

				<option>Улично задръстване</option>

				<option>Екстремни пътища</option>

				<option>Магистрала</option>

			</select>

			<input type="submit" name="calc" value="Изчисли">

		</div>

	</form>

	<?php

	include 'php_code.php';

	?>

</body>

</html>