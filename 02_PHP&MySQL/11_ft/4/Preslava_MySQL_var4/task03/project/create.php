<?php 
$title = 'Create';
include "includes/header.php";

$countries_query = "SELECT * FROM `countries`";
$countries_result = mysqli_query($conn, $countries_query);

?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Read</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="product_name">Destination Name</label>
					<input type="text" class="form-control" id="destination_name" name="destination_name" placeholder="destination name here ...">
				</div>
				<div class="form-group">
					<label for="manufacturer">Country</label>
					<select class="form-control" id="country" name="country_id">
						<?php if(mysqli_num_rows($countries_result) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($countries_result)){ ?>

								<option value="<?= $row['country_id'] ?>"><?= $row['name'] ?></option>

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
		$country 	= $_POST['country_id'];

		$create_query = "INSERT INTO `destinations`( `destination_name`, `country_id`) VALUES ('$destination_name ' , " . (int)$country . ")";
		var_dump($create_query );
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
