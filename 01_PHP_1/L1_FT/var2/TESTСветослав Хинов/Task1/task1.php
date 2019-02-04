<?php

$date=$_POST['date'];

if ($date%2==0) {	
	echo "<ul type=circle>";
	echo "<h3>Времето е студено вземи си:</h3>";
	echo "<li>Шапка</li>";
	echo "<li>Шал</li>";
	echo "<li>Ръкавици</li>";
	echo "</ul>";
}elseif ($date<=0 || $date>=32) {
	echo "Въвели сте некоректно число";
}else{
	echo "<ul type=circle>";
	echo "<h3>Времето е топло облечи си:</h3>";
	echo "<li>Тениска</li>";
	echo "<li>Къси панталони</li>";
	echo "<li>Джапанки</li>";
	echo "</ul>";
}