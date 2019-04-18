<?php 
$title = 'Create';
include "includes/header.php";
$destination_query = "SELECT * FROM destinations";
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
					<label for="cinema_name">Destinations name</label>
					<input type="text" class="form-control" name="destination_name" placeholder="Destination name here ...">
				</div>
				<div class="form-group">
					<label for="cinema_places">Country</label>
					<input type="text" class="form-control" name="name" placeholder="Country here ...">
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
		$destination_name 			= $_POST['destination_name'];
		$name			            = $_POST['name'];
		
		$create_query = "INSERT INTO destinations (destination_name)";
		$create_query .= " VALUES ('" . $destination_name . "')";
		//var_dump($create_query);
		
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