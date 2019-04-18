<?php 

$conn = mysqli_connect('localhost', 'root', '', 'travel');

if(!$conn){
	die("Connection failed:" . mysqli_connect_error());
} else {
	// echo '<h1>Connected successfully!</h1>';
}

