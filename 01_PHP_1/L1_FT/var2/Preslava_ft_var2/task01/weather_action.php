<meta charset="utf-8">
<?php 
if (!empty($_POST['submit'])) {
	$date =$_POST['date'];
	if ($date>30) {
		echo "Невалидна дата. Можете да въвеждате само от 1 до 30.";
	}
	if ($date%2 == 0 && $date<=30) {
		echo "<ul>";
		echo "<li>";
		echo "Чадър";
		echo "</li>";
		echo "<li>";
		echo "Яке";
		echo "</li>";
		echo "<li>";
		echo "Блуза с дълъг ръкав";
		echo "</li>";
		echo "<li>";
		echo "Дълги панталони";
		echo "</li>";
		echo "</ul>";
	}elseif ($date%2 != 0 && $date<=30) {
		echo "<ul>";
		echo "<li>";
		echo "Тениска";
		echo "</li>";
		echo "<li>";
		echo "Къси панталони";
		echo "</li>";
		echo "<li>";
		echo "Слънчеви очила";
		echo "</li>";
		echo "<li>";
		echo "Сандали";
		echo "</li>";
		echo "</ul>";
	}
}

?>