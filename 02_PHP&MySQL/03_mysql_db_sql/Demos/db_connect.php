<?php 

$conn = mysqli_connect('localhost', 'root', '', 'demo_shop');

if(!$conn){
	die("Connection failed:" . mysqli_connect_error());
} else {
	echo '<h1>Connected successfully!</h1>';
}

$q = "SELECT * FROM `product` WHERE 1";

$result = mysqli_query($conn, $q);

// var_dump($result);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<pre>";
		var_dump($row);
		echo "</pre>";
	}
}

