<?php

include 'includes/db_conn.php';
$id = $_GET['id'];

$delete_q = "DELETE FROM destinations WHERE destination_id = $id";
$result = mysqli_query($conn, $delete_q);

if($result) {
	header('Location: read.php');
} else {
	echo mysqli_error($conn);
}