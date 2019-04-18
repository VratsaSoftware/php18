<?php 
include 'includes/db_connect.php';

$id = $_GET['destinations'];

$date = date('Y-m-d');
$soft_delete_destinations = "UPDATE `destinations` SET `date_deleted`='$date' WHERE id=$id";
$result = mysqli_query($conn, $soft_delete_destinations);
$soft_delete_countries = "UPDATE `countries` SET `date_deleted`='$date' WHERE id=$id";
$result = mysqli_query($conn, $soft_delete_countries);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}