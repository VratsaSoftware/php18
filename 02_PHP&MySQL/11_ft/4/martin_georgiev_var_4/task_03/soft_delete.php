<?php

include 'includes/db_conn.php';
$id = $_GET['id'];

$date = new DateTime("now", new DateTimeZone('Europe/Sofia'));
$date_deleted = $date->format('Y-m-d H:i:s');

$soft_delete_q = "UPDATE destinations SET date_deleted = '$date_deleted' WHERE destination_id = $id";
$result = mysqli_query($conn, $soft_delete_q);

if ($result) {
	header('Location: read.php');
} else {
	echo mysqli_error($conn);
}

