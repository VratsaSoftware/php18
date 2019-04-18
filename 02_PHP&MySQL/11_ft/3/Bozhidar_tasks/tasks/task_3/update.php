<?php 
include "header.php";

$id = $_GET['id'];
$read_q = "SELECT * FROM hotels WHERE hotel_id = $id";
$result = mysqli_query($conn, $read_q);

$row = mysqli_fetch_assoc($result);

if ($row) {
	$hotel_name = $row['hotel_name'];
	$rooms = $row['rooms'];
	
} else {
	$hotel_name = '';
}
	?>

	<form action="" method="post">
		<input type="text" name="hotel_name" value="<?= $hotel_name ?>">
		<input type="text" name="rooms" value="<?= $rooms ?>">
		<input type="hidden" name="id" value= "<?= $id ?>">
		<input type="submit" name="submit" value="Update">
	</form
		<?php 
if(isset($_POST['submit'])){
	var_dump($_POST);
	$id 		= $_POST['id'];
	$hotel_name 	= $_POST['hotel_name'];
	$rooms = $_POST['rooms'];


	$update_q = "UPDATE `hotels` SET `hotel_name`='$hotel_name',`rooms`='$rooms' WHERE hotel_id=$id";

	$result = mysqli_query($conn, $update_q);

	if($result){
		
		header('Location: read.php');
	} else {
		echo mysqli_error($conn);
		echo "Please, try again later!";
	}
}
// include 'includes/footer.php';
