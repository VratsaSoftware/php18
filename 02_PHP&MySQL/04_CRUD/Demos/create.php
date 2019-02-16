<?php 

include 'db_connect.php';

$insert_q = "INSERT INTO `country`(`name`, `iso_code_2`, `iso_code_3`) VALUES ('test country', 'test iso code 1',  'test iso code 2')";

$result = mysqli_query($conn, $insert_q);

if ($result) {

	echo 'You inserted row in DB successfully!';
	
	//LINK TO READ HERE
} else {
	echo "Try again!";
}