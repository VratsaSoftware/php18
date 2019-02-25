<?php 
include 'includes/db_connect.php';

$id = $_GET['product'];

$delete_product = "DELETE FROM `product` WHERE `product_id`=$id";
$result = mysqli_query($conn, $delete_product);

$delete_product_description = "DELETE FROM `product_description` WHERE `product_id`=$id";
$result = mysqli_query($conn, $delete_product_description);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}