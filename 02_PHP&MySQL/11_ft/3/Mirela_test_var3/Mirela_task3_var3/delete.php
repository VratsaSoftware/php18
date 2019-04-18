<?php 
include 'includes/db_connect.php';
$id = $_GET['id'];

$delete_q = "DELETE FROM `hotels` WHERE `hotel_id`=$id";

$result = mysqli_query($conn, $delete_q);

if($result){
	header('Location: read.php');
} else {
	echo mysqli_error($conn);
}
include 'includes/footer.php';