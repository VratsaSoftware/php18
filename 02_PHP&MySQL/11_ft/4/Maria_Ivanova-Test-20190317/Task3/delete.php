<?php 
include 'includes/db_connect.php';

$id = $_GET['destinations'];

$delete_destination = "DELETE FROM `destinations` WHERE `destination_id`=$id";
$result = mysqli_query($conn, $delete_destination);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}