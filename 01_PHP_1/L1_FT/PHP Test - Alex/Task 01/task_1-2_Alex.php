<?php

$year = $_POST['year'];

if ($year % 4 == 0 && $year % 100 != 0) {
	echo 'Leap year';
} else {
	echo 'Not a leap year';
}