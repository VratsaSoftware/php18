<?php 
include "includes/header.php";
$title = 'Create';

$destinations_query = "SELECT * FROM destinations";
$destinations_result = mysqli_query($conn, $destinations_query);
?>
	<div class="container">
	<div class="row justify-content-md-center">
		<h2>Create</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="hotel">Hotel name</label>
					<input type="text" class="form-control" id="hotel" name="hotel" placeholder="Hotel name here ...">
				</div>
				<div class="form-group">
					<label for="rooms">Rooms</label>
					<input type="int" class="form-control" id="rooms" name="rooms" placeholder="Rooms here ...">
				</div>
				<div class="form-group">
					<label for="destination">Destination select</label>
					<select class="form-control" id="destination" name="destination_id">
						<?php if(mysqli_num_rows($destinations_result) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($destinations_result)){ ?>

								<option value="<?= $row['destination_id'] ?>"><?= $row['destination_name'] ?></option>

							<?php } ?>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">SAVE hotel</button>
				</div>
			</form>
		</div>
	</div>
</div>
	<?php 
	if(isset($_POST['submit'])){
		$hotel_name = 	$_POST['hotel'];
		$rooms = 		$_POST['rooms'];
		$destination = 	$_POST['destination_id'];

		$q_create = "INSERT INTO `hotels`(`hotel_name`, `destination_id`, `rooms`) VALUES ('$hotel_name', '$destination', $rooms)";

		$result = mysqli_query($conn, $q_create);

		if($result){
			header('Location: success.html');
		} else {
			echo mysqli_error($conn);
		}
	} else {
			
	}
	
include 'includes/footer.php';
	?>
