<?php 
$title = 'Create';
include "includes/header.php";

$hotel_query = "SELECT * FROM hotels";
$hotel_result = mysqli_query($conn, $hotel_query);

$destinations_query = "SELECT * FROM destinations";
$destinations_result = mysqli_query($conn, $destinations_query);
?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Create</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">

			<!-- Form for creating new "hotel" -->

			<form method="post" action="">

				<!-- Input "hotel name" -->

				<div class="form-group">
					<label for="hotel_name">Hotel name</label>
					<input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="Hotel name here ...">
				</div>

				<!-- Input "rooms" -->

				<div class="form-group">
					<label for="rooms">Rooms</label>
					<input type="text" class="form-control" id="rooms" name="rooms" placeholder="rooms here ...">
				</div>

				<!-- Input "destination" -->
				<!-- Dropdown menu for the "destination" -->
				<div class="form-group">
					<label for="destination">Select destination</label>
					<select class="form-control" id="destination" name="destination_id">
						<?php if(mysqli_num_rows($destinations_result) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($destinations_result)){ ?>

								<option value="<?= $row['destination_id']; ?>">

									<?= $row['destination_name']; ?>
									
								</option>

							<?php } ?>

						<?php } ?>
					</select>
				</div>

				<!-- Save button -->

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">SAVE hotel</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Inserting query for new "hotel" in the DB -->

<?php 
if(isset($_POST['submit'])){
		$hotel_name 			= $_POST['hotel_name'];
		$rooms 					= $_POST['rooms'];
		$destination_id 		= $_POST['destination_id'];
		
		$create_query = "INSERT INTO hotels (hotel_name, rooms, destination_id)";
		$create_query .= " VALUES ('" . $hotel_name . "', " . (int)$rooms . ", " . (int)$destination_id . ")";
		
		$result = mysqli_query($conn, $create_query);
		
		if($result){
		// echo "Success!";
			header('Location: read.php');
		} else {
			echo mysqli_error($conn);
		// echo "Please, try again later!";
		}
	}
include 'includes/footer.php';
?>
