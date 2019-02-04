<?php
if (isset($_POST)) {
	$num = $_POST['num'];
	$submit = $_POST['submit'];
}
if (!empty($_POST)) {
	if ($num % 2 == 0) {
		echo 'Препоръчително е облекло за дъждовно време';
	}
	else{
		echo 'Препоръчително е облекло и екипировка за много горещо време. ';
	}
}
?>