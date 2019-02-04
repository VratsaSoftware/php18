<?php 

$phone_numbers = [	
					'John Smith'=> '+1-555-8976',
					'Lisa Smith'=> '+1-555-1234',
					'Sam Doe'	=> '+1-555-5030',
				];

echo '<table border=1>';
echo '<tr><td>Name</td><td>Phone</td></tr>';

foreach($phone_numbers as $name=>$phone){
	echo '<tr>';
	echo '<td>' . $name . '</td>';
	echo "<td>$phone</td>";
	echo '</tr>';
}

echo '</table>';