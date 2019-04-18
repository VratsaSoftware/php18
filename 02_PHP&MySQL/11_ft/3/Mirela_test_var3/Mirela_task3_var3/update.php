<?php 
$title = 'Update';
include "includes/header.php";

$id = $_GET['id'];

$q_read = "SELECT h.hotel_id, h.hotel_name, des.destination_name, h.destination_id, c.name, h.rooms, h.date_deleted FROM `hotels` AS h";
$q_read .= " JOIN destinations as des ON des.destination_id=h.destination_id";
$q_read .= " JOIN countries as c ON c.country_id=des.country_id ";
$q_read .= " WHERE h.hotel_id=" . $id;

$result = mysqli_query($conn, $q_read);

$row_hotel = mysqli_fetch_assoc($result);

$destinations_query = "SELECT * FROM destinations";
$destinations_results = mysqli_query($conn, $destinations_query);



?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Update</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="hotel_name">Hotel name</label>
					<input type="text" class="form-control" id="hotel_name" name="hotel_name" value="<?= $row_hotel['hotel_name'] ?>">
				</div>
				<div class="form-group">
					<label for="product_price">Rooms</label>
					<input type="text" class="form-control" id="rooms" name="rooms" value="<?= $row_hotel['rooms'] ?>">
				</div>
				<div class="form-group">
					<label for="manufacturer">Destination select</label>
					<select class="form-control" id="destination_id" name="destination_id">
						<?php if(mysqli_num_rows($destinations_results) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($destinations_results)){ ?>

								<option value="<?= $row['destination_id']; ?>" 
									<?php if( $row['destination_id'] == $row_hotel['destination_id']) { 
										echo 'selected'; 
									} ?> ><?= $row['destination_name'] ?></option>

							<?php } ?>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">SAVE product</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
if(isset($_POST['submit'])){
		$hotel_name 	= $_POST['hotel_name'];
		$rooms 			= $_POST['rooms'];
		$destination_id = $_POST['destination_id'];


		//to do add hidden field product id
		$hotel_update_query = "UPDATE `hotels` SET `hotel_name`='$hotel_name',`destination_id`=$destination_id,`rooms`=$rooms WHERE `hotel_id`=$id";

		$result_update = mysqli_query($conn, $hotel_update_query);
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
