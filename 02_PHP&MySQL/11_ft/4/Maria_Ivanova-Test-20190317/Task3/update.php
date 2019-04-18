<?php 
$title = 'Update';
include "includes/header.php";

$destination_id = $_GET['destinations'];

$read_query = "SELECT d.destination_id, d.destination_name, c.name, c.country_id FROM ";
$read_query .= "destinations d JOIN countries c ON d.country_id = c.country_id ";
$read_query .= "WHERE d.destination_id=".$destination_id;

$result = mysqli_query($conn, $read_query);

$row_destination = mysqli_fetch_assoc($result);

$countries_query = "SELECT * FROM countries";
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
					<label for="destination_name">Destination name</label>
					<input type="text" class="form-control" id="destination_name" name="destination_name" value="<?= $row_destination['destination_name'] ?>">
				</div>				
				<div class="form-group">
					<label for="country">Select country</label>
					<select class="form-control" id="country" name="country_id">
						<?php if(mysqli_num_rows($countries_result) > 0){ ?>							
							<?php while($row = mysqli_fetch_assoc($countries_result)){ ?>
<?php var_dump($row)?>
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
		$destination_name 		= $_POST['destination_name'];
		$country_id 			= $_POST['country_id'];
		
		//to do add hidden field product id
		$update_query = "UPDATE destinations SET destination_name ='" .$destination_name. "', ";
		$update_query .= "country_id=" . (int)$country_id;
		$update_query .= " WHERE destination_id=" . $destination_id ;
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
