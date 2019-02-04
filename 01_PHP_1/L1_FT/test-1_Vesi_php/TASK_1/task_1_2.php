<?php

$year = $_POST ['year'];

if ($year % 4 ==0 && $year % 100 != 0) {
	echo 'leap year';
} else {
	echo 'not a leap year';
}