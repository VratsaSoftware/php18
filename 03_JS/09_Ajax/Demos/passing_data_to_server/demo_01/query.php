<?php 

include 'database.php';

$title = $_POST['title'];
$content = $_POST['content'];

$insert_query = "INSERT INTO `posts`(`title`, `content` ) VALUES ('$title', '$content' )";

if(mysqli_query($conn, $insert_query)){

	$last_id = $conn->insert_id;

	$read_query = "SELECT * FROM `posts` WHERE `id`=$last_id";

	$result = mysqli_query($conn, $read_query);

	$row = mysqli_fetch_assoc($result);

	echo json_encode($row) ;
}

