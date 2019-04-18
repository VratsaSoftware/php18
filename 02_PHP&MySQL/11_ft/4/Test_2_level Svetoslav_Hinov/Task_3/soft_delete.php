<?php 
include 'includes/connect_file.php';

$id = $_GET['destination'];

$date = date('Y-m-d');
$soft_delete_cinema = "UPDATE `destinations` SET `date_deleted`='$date' WHERE destination_id=$id";
$result = mysqli_query($conn, $soft_delete_cinema);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}