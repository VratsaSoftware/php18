<?php 
include 'includes/db_connect.php';

$id = $_GET['cinema'];

$date = date('Y-m-d');
$soft_delete_cinema = "UPDATE `cinemas` SET `date_deleted`='$date' WHERE id=$id";
$result = mysqli_query($conn, $soft_delete_cinema);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}