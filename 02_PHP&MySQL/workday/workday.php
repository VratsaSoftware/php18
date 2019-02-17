<?php
function workdays ($day)
{
	if ($day === "Saturday" || $day === "Sunday") {
		echo "Not a working day";
	} else {
		echo "Working day";
	}
}

workdays("Tuesday");