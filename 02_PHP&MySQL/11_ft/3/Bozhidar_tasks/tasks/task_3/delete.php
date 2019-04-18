<?php 
include 'db_connect.php';
$id = $_GET['id'];

$delete_q = "DELETE FROM `hotels` WHERE `hotel_id`=$id";

$result = mysqli_query($conn, $delete_q);

if($result){
		// echo "Success!";
	header('Location: read.php');
} else {
	echo mysqli_error($conn);
	// echo "Please, try again later!";
}