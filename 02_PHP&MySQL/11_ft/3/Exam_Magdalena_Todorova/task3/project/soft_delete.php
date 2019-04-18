<?php 
include 'includes/db_connect.php';

$id = $_GET['hotel'];

$date = date('Y-m-d');
$soft_delete_hotel = "UPDATE `hotels` SET `date_deleted`='$date' WHERE hotel_id=$id";
$result = mysqli_query($conn, $soft_delete_hotel);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}