<?php 
$title = 'Update';
include "includes/header.php";

$destination_id = $_GET['destination'];

$read_query = "SELECT destinations.destination_name, countries.name, destinations.destination_id, countries.country_id  FROM `destinations` JOIN countries ON countries.country_id=destinations.country_id  WHERE destinations.destination_id= $destination_id ";


$result = mysqli_query($conn, $read_query);

$row_destination = mysqli_fetch_assoc($result);

$countries_query = "SELECT * FROM `countries`";
$countries_result = mysqli_query($conn, $countries_query);



?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Update</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="product_name">Destination name</label>
					<input type="text" class="form-control" id="destination_name" name="destination_name" value="<?= $row_destination['destination_name'] ?>">
				</div>
				<div class="form-group">
					<label for="manufacturer">Country</label>
					<select class="form-control" id="countries" name="country_id">
						<?php if(mysqli_num_rows($countries_result ) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($countries_result )){ ?>

								<option value="<?= $row['country_id']; ?>" <?php if( $row['country_id'] == $row_destination['country_id']) { echo 'selected'; } ?> ><?= $row['name'] ?></option>

							<?php } ?>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">SAVE destination</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
if(isset($_POST['submit'])){
		$destination_name 			= $_POST['destination_name'];
		$country_id 	= $_POST['country_id'];
		

		//to do add hidden field product id
		$update_query = "UPDATE destinations SET destination_name='$destination_name' , ";
		$update_query .="country_id=" . (int)$country_id." ";
		$update_query .= " WHERE destinations.destination_id=" . $destination_id ;

		var_dump($update_query);
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
