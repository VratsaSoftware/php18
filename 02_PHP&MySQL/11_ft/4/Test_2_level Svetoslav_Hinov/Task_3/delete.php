<?php 
include 'includes/connect_file.php';

$id = $_GET['destination'];

$delete_destination = "DELETE FROM `destinations` WHERE `destination_id`=$id";

$result = mysqli_query($conn, $delete_destination);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}