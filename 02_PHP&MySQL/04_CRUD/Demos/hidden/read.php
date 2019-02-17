<?php 
include 'db_connect.php';

$read_q = "SELECT * FROM `country` WHERE 1";

$result = mysqli_query($conn, $read_q);

// var_dump($result);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<pre>";
		var_dump($row);
		echo "</pre>";
	}
}

