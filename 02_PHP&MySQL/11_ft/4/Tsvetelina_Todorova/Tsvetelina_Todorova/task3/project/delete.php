<?php 
include 'includes/db_connect.php';

$id = $_GET['destination'];

$delete_destination = "DELETE FROM `destinations` WHERE `destination_id`= $id";
$result = mysqli_query($conn, $delete_destination);

$delete_country = "DELETE FROM `countries` WHERE `country_id`=$id";
$result = mysqli_query($conn, $delete_country);


if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}