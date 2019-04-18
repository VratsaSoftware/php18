<?php 
include 'includes/db_connect.php';

$id = $_GET['hotel_id'];

$delete_product = "DELETE FROM `hotels` WHERE `product_id`=$id";
$result = mysqli_query($conn, $delete_product);


if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}