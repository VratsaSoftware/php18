<?php

if (isset($_POST['check'])) {
	$num = $_POST['num'];

	if (!empty($num)) {
		if ($num % 2 == 0) {
			echo '<h3>'.'Времето е дъждовно, вземи:'.'</h3>';

			echo '<ul>';
			echo '<li>'.'Дъждобран'.'</li>';
			echo '<li>'.'Чадър'.'</li>';
			echo '<li>'.'Високи и неводопропускливи обувки'.'</li>';
			echo '</ul>';
		} else {
			echo '<h3>'.'Времето е горещо, облечи:'.'</h3>';

			echo '<ul>';
			echo '<li>'.'Тениска'.'</li>';
			echo '<li>'.'Къси гащи'.'</li>';
			echo '<li>'.'Шапка'.'</li>';
			echo '<li>'.'Джапанки'.'</li>';
			echo '<ul>';
		}
	}
}