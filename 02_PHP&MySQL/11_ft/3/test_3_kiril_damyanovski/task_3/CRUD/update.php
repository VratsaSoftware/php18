<?php 
$title = 'Update';
include "includes/header.php";

$hotel_id = $_GET['hotel'];

$read_query = "SELECT hotels.*, destinations.destination_name FROM `hotels`";
$read_query .= " JOIN destinations ON destinations.destination_id=hotels.destination_id ";

$read_query .= "WHERE hotels.hotel_id=".$hotel_id;

$result = mysqli_query($conn, $read_query);

$row_hotel = mysqli_fetch_assoc($result);

$destinations_query = "SELECT * FROM destinations";
$destinations_result = mysqli_query($conn, $destinations_query);

?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Update</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">

			<!-- Form for updating "hotels" -->

			<form method="post" action="">

				<!-- Input for changing "hotel name" -->

				<div class="form-group">
					<label for="hotel_name">Hotel name</label>
					<input type="text" class="form-control" id="hotel_name" name="hotel_name" value="<?= $row_hotel['hotel_name'] ?>">
				</div>

				<!-- Input for changing "rooms" -->

				<div class="form-group">
					<label for="rooms">Rooms</label>
					<input type="text" class="form-control" id="rooms" name="rooms" value="<?= $row_hotel['rooms'] ?>">
				</div>

				<!-- Dropdown menu for changing "destination" -->

				<div class="form-group">
					<label for="destination">Destination</label>
					<select class="form-control" id="destination" name="destination_id">
						<?php if(mysqli_num_rows($destinations_result) > 0){ ?>							
							<?php while($row = mysqli_fetch_assoc($destinations_result)){ ?>

								<option value="<?= $row['destination_id']; ?>" <?php if( $row['destination_id'] == $row_hotel['destination_id']) { echo 'selected'; } ?> >
									<?= $row['destination_name'] ?>
									
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

<!-- Update query for the specific "hotel" in the DB -->

<?php 
if(isset($_POST['submit'])){
		$hotel_name 			= $_POST['hotel_name'];
		$rooms 					= $_POST['rooms'];
		$destination_id 		= $_POST['destination_id'];
		
		$update_query = "UPDATE hotels SET hotel_name ='" .$hotel_name. "', ";
		$update_query .="rooms=" . (int)$rooms .", ";
		$update_query .= "destination_id=" . (int)$destination_id;
		$update_query .= " WHERE hotel_id=" . $hotel_id ;
		
		$result_update = mysqli_query($conn, $update_query);
		
		if($result_update){
		// echo "Success!";
			header('Location: read.php');
		} else {
			echo mysqli_error($conn);
		// echo "Please, try again later!";
		}
	}
include 'includes/footer.php';
?>
