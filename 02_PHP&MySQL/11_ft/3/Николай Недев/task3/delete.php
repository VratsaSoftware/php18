<?php 
include 'includes/db_connect.php';

$hotel_id = $_GET['hotel'];

$delete_hotel = "DELETE FROM `hotels` WHERE `hotel_id`=$hotel_id";
$result = mysqli_query($conn, $delete_hotel);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}