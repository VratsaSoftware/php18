<?php

if(empty($_GET['number4e'])){
	echo 'Няма въведена дата!';
} else {
	$date = $_GET['number4e'];
	if($date <= 0 || $date > 30){
		echo 'Невалидна дата!';
	} else {
		if($date%2 == 0){
			echo "<p>It's going to rain!</p>";
			echo "<p>You need:</p>
			<ul>
				<li>Hat</li>
				<li>Jacket</li>
				<li>Boots</li>
				<li>Umbrela</li>
			</ul>";
		}else{
			echo "<p>Hot weather up ahead!</p>";
			echo "<p>Take this:</p>
			<ul>
				<li>T-shirt</li>
				<li>Shorts</li>
				<li>Sandals</li>
			</ul>";
		}	
	}	
}
