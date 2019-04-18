<?php 
$title = 'Create';
include "includes/header.php";


?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Read</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="product_name">Hotel name</label>
					<input type="text" class="form-control" id="hotel_name" name="hotel_name" placeholder="Hotel name here ...">
				</div>
				<div class="form-group">
					<label for="product_price">Destination (1 to 7)</label>
					<input type="text" class="form-control" id="destination_id" name="destination_id" placeholder="Destination here ...">
				</div>
				<div class="form-group">
					<label for="product_name">Rooms quantity</label>
					<input type="text" class="form-control" id="rooms" name="rooms" placeholder="Rooms here ...">
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
		$hotel_name			    = $_POST['hotel_name'];
		$destination_id		= $_POST['destination_id'];
		$rooms 		                 = $_POST['rooms'];


		$date_modified 			= date('Y-m-d h:i:s');

		$product_create_query = "INSERT INTO hotels(hotel_name, destination_id, rooms)";
		$product_create_query .= " VALUES(". "$hotel_name ". ", " . "$destination_id". ", " . "$rooms" .")";

		var_dump($product_create_query);

		
		$result = mysqli_query($conn, $product_create_query);




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
