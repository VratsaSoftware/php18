<?php

if (isset($_POST['calc'])) {

	$cost = $_POST['cost'];

	$condition = $_POST['conditionals'];
var_dump($_POST['conditionals']);


	if (!empty($_POST)) {

		if ($condition == 'Снежна покривка') {

			$cost += 5/100*$cost;

		} else if ($condition == 'Улично задръстване') {

			$cost += 50/100*$cost;

		} else if ($condition == 'Екстремни пътища') {

			$cost += 20/100*$cost;

		} else if ($condition == 'Магистрала') {

			$cost -= 10/100*$cost;

		}



		echo '<p>'.'The new cost is '.$cost.' L/100 km'.'</p>';

	}

}