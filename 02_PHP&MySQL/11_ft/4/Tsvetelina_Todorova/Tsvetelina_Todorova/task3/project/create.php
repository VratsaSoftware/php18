<?php 
$title = 'Create';
include "includes/header.php";

$destination_query = "SELECT * FROM travel";
$destination_result = mysqli_query($conn, $destination_query);

?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Create</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="destination_name">Destination</label>
					<input type="text" class="form-control" id="destination_name" name="destination_name" placeholder="Destination name here ...">
				</div>
				<div class="form-group">
					<label for="name">Country</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Countries here ...">
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
		$country_name				= $_POST['name'];

		$create_query = "INSERT INTO destinations (destination_name)";
		$create_query .= " VALUES ('" . $destination_name . "')";
		
		$result = mysqli_query($conn, $create_query);

		$country_create_query .= " INSERT INTO countries (name)";
		$country_create_query .= " VALUES ('" . $country_name . "')";
		
		$result = mysqli_query($conn, $country_create_query);
		
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
