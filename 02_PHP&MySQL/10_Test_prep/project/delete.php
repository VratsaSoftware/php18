<?php 
include 'includes/db_connect.php';

$id = $_GET['cinema'];

$delete_cinema = "DELETE FROM `cinemas` WHERE `id`=$id";
$result = mysqli_query($conn, $delete_cinema);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);	
}