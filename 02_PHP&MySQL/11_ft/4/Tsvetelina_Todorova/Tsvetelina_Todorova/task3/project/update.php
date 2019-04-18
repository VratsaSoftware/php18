<?php 
$title = 'Update';
include "includes/header.php";

$country_id = $_GET['destinations'];

$read_query = "SELECT d.destination_id, d.destination_name, c.country_id, d.country_id c.name AS country_name FROM destinations d JOIN countries c ON d.country_id = c.country_id";
$read_query .= "WHERE d.country_id=".$country_id;

$result = mysqli_query($conn, $read_query);

$row = mysqli_fetch_assoc($result);
?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Update</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="destination_name">Destination</label>
					<input type="text" class="form-control" id="destination_name" name="destination_name" value="<?= $row['destination_name'] ?>">
				</div>
				<div class="form-group">
					<label for="country_name">Country</label>
					<input type="text" class="form-control" id="country_name" name="country_name" value="<?= $row['country_name'] ?>">
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
		$country_name				= $_POST['country_name'];
		$id 						= $_POST['country_id'];
		
		//to do add hidden field product id
		$update_query = "UPDATE destinations SET destination_name ='" .$destination_name. "', ";
		$update_query .= " WHERE country_id=" . $id ;
		var_dump($update_query);
		$result_update = mysqli_query($conn, $update_query);
		
		$country_update_query = "UPDATE countries SET country_name ='" .$country_name. "', ";
		$country_update_query .= " WHERE country_id=" . $id ;
		$country_result = mysqli_query($conn, $country_update_query);
		
		if($result_update){
			header('Location: read.php');
		} else {
			echo mysqli_error($conn);
		}
	}
include 'includes/footer.php';
?> -->
