<?php


$peaople_body_info = [
						['name' => 'Mark', 'age' => '46', 'height' => '174', 'weight' => '86'],
						['name' => 'Jhoe', 'age' => '61', 'height' => '155', 'weight' => '63'],
						['name' => 'Bob', 'age' => '16', 'hright' => '170', 'weight' => '65'],
						['name' => 'Nikolay', 'age' => '32', 'hright' => '165', 'weight' => '73'],
						['name' => 'Brayan', 'age' => '42', 'hright' => '185', 'weight' => '93'],
					];


echo '<table border=1>';
	foreach($peaople_body_info as $name => $men_name, $age => $men_age, $height => $men_height, $weight => $men_weight){
		echo '<tr>';
		echo '<td></td>';
		echo '<td></td>';
		echo '</tr>';		
	}

echo '</table>';
?>
