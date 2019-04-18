<?php 
include 'includes/db_connect.php';

$id = $_GET['hotel'];

$delete_hotel = "DELETE FROM `hotels` WHERE `hotel_id`=$id";
$result = mysqli_query($conn, $delete_hotel);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}