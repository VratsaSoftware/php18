<?php 
$title = 'Update';
include "includes/header.php";
$destination_id = $_GET['destination_name'];
$read_query = "SELECT countries.name, destinations.destination_name FROM `countries` JOIN destinations ON destinations.country_id = countries.country_id ";
//$read_query .= "WHERE contries.id=".$country_id;
$result = mysqli_query($conn, $read_query);
$row_destination = mysqli_fetch_assoc($result);
$destination_query = "SELECT * FROM destinations";
$destination_result = mysqli_query($conn, $destination_query);
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
					<button type="submit" name="submit" class="btn btn-success">SAVE Destination</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
if(isset($_POST['submit'])){
	   // $destination_id         = $_POST['destination_id'];
		$destination_name 		= $_POST['destination_name'];
		
		//to do add hidden field product id
		$update_query = "UPDATE destinations SET destination_name ='" .$destination_name. "', ";
		
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