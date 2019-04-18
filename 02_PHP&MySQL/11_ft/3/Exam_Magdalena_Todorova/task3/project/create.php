<?php 
$title = 'Create';
include "includes/header.php";

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
					<label for="hotel_name">Hotel name</label>
					<input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="Hotel name here ...">
				</div>
				<div class="form-group">
					<label for="hotel_rooms">Rooms</label>
					<input type="text" class="form-control" id="hotel_rooms" name="hotel_rooms" placeholder="Rooms here ...">
				</div>				
				<div class="form-group">
					<label for="destination">Select destination</label>
					<select class="form-control" id="destination" name="destination_id">
						<?php if(mysqli_num_rows($destinations_result) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($destinations_result)){ ?>

								<option value="<?= $row['destination_id'] ?>"><?= $row['destination_name'] ?></option>

							<?php } ?>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">SAVE cinema</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
if(isset($_POST['submit'])){
		$hotel_name 			= $_POST['hotel_name'];
		$hotel_rooms 			= $_POST['hotel_rooms'];
		$destination_id 		= $_POST['destination_id'];
		
		$create_query = "INSERT INTO hotel (hotel_name, rooms, destination_id)";
		$create_query .= " VALUES ('" . $hotel_name . "', " . (int)$hotel_rooms . ", " . (int)$destination_id . ")";
		var_dump($create_query);
		
		$result = mysqli_query($conn, $create_query);
		
		if($result){
		echo "Success!";
			header('Location: read.php');
		} else {
			echo mysqli_error($conn);
		echo "Please, try again later!";
		}
	}
include 'includes/footer.php';
?>
