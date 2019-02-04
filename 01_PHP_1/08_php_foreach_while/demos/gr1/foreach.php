<?php 

$phone_numbers = [	
					'John Smith'=> '+1-555-8976',
					'Lisa Smith'=> '+1-555-1234',
					'Sam Doe'	=> '+1-555-5030',
				];


// foreach($phone_numbers as $key=>$value){
foreach($phone_numbers as $name=>$phone_number){
	echo 'The phone number of '.$name. ' is ' . $phone_number . ' // ';
}

$num = 1;
foreach($phone_numbers as $phone_number){
	echo 'The phone number  '. $num . ' is ' . $phone_number . ' // ';

	// $num = $num + 1;
	$num++;
}

$number = 1; 
foreach($phone_numbers as $name=>$phone_number){
	echo 'The name '.$num. ' is ' . $name. ' // ';
	$num++;
}