<?php 
include 'includes/db_connect.php';

$id = $_GET['destination'];

$delete_product = "DELETE FROM `destinations` WHERE `destination_id`=$id";
$result = mysqli_query($conn, $delete_product);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}