<?php 
$title = 'Update';
include "includes/header.php";

$cinema_id = $_GET['cinema'];

$read_query = "SELECT c.id, c.cinema_name, c.places, cc.country_name, cc.country_id FROM ";
$read_query .= "cinemas c JOIN countries cc ON c.country_id = cc.country_id ";
$read_query .= "WHERE c.id=".$cinema_id;

$result = mysqli_query($conn, $read_query);

$row_cinema = mysqli_fetch_assoc($result);

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
					<label for="cinema_name">cinema name</label>
					<input type="text" class="form-control" id="cinema_name" name="cinema_name" value="<?= $row_cinema['cinema_name'] ?>">
				</div>
				<div class="form-group">
					<label for="cinema_places">Places</label>
					<input type="text" class="form-control" id="cinema_places" name="cinema_places" value="<?= $row_cinema['places'] ?>">
				</div>				
				<div class="form-group">
					<label for="country">Select country</label>
					<select class="form-control" id="country" name="country_id">
						<?php if(mysqli_num_rows($countries_result) > 0){ ?>							
							<?php while($row = mysqli_fetch_assoc($countries_result)){ ?>
<?php var_dump($row)?>
								<option value="<?= $row['country_id']; ?>" <?php if( $row['country_id'] == $row_cinema['country_id']) { echo 'selected'; } ?> ><?= $row['country_name'] ?></option>

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
		$product_name 			= $_POST['product_name'];
		$product_price 			= $_POST['product_price'];
		$product_quantity 		= $_POST['product_quantity'];
		$product_manufacturer 	= $_POST['manufacturer_id'];
		
		$date_modified 			= date('Y-m-d h:i:s');

		//to do add hidden field product id
		$product_update_query = "UPDATE product SET price=" .(float)$product_price. ", ";
		$product_update_query .="quantity=" . (int)$product_quantity .", ";
		$product_update_query .= "manufacturer_id=" . (int)$product_manufacturer . ", ";
		$product_update_query .= "date_modified='$date_modified' ";
		$product_update_query .= "WHERE product_id = $product_id";
		$result_update = mysqli_query($conn, $product_update_query);

		$product_description_update_query = "UPDATE product_description SET name='$product_name'";
		$product_description_update_query .= " WHERE product_id = $product_id";	
			var_dump($product_description_update_query);
		$result = mysqli_query($conn, $product_description_update_query);

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
