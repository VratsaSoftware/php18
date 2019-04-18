<?php 
include "header.php";
?>
	<div class="col-9">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="hotel_name" placeholder="Hotel name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="rooms" placeholder="Rooms">
			</div>
			<input type="submit" name="submit" value="Add">
		</form>
	</div>
	<?php 
	if(isset($_POST['submit'])){
		$hotel_name 	= $_POST['hotel_name'];
		$rooms = $_POST['rooms'];

		$q_create = "INSERT INTO `hotels` (`hotel_name`, `destination_id`, `rooms`) VALUES ('$hotel_name', '6', '$rooms')";

		$result = mysqli_query($conn, $q_create);

		if($result){
		// echo "Success!";
			header('Location: read.php');
		} else {
			echo mysqli_error($conn);
		// echo "Please, try again later!";
		}
	}
// include 'includes/footer.php';
	?>
