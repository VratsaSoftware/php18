<?php 
include "includes/header.php";
$id = $_GET['id'];

$date_deleted = date('Y-m-d h:i:s');

$update_q = "SELECT * FROM hotels WHERE hotel_id = $id";

$result = mysqli_query($conn, $update_q);
$row = mysqli_fetch_assoc($result);

if ($row) {
	$soft_del_q = "UPDATE `hotels` SET `date_deleted`= '$date_deleted' WHERE `hotel_id`=$id";

	$result = mysqli_query($conn, $soft_del_q);

	if($result){
		// echo "Success!";
		header('Location: read.php');
	} else {
		echo mysqli_error($conn);
	}
}
include 'includes/footer.php';