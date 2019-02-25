<?php 
$title = 'Create';
include "includes/header.php";

$manufacturers_query = "SELECT * FROM manufacturer";
$manufacturers_result = mysqli_query($conn, $manufacturers_query);

?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Read</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="product_name">Product name</label>
					<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product name here ...">
				</div>
				<div class="form-group">
					<label for="product_price">Product price</label>
					<input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product price here ...">
				</div>
				<div class="form-group">
					<label for="product_name">Product quantity</label>
					<input type="text" class="form-control" id="product_quantity" name="product_quantity" placeholder="Product quantity here ...">
				</div>
				<div class="form-group">
					<label for="manufacturer">Example select</label>
					<select class="form-control" id="manufacturer" name="manufacturer_id">
						<?php if(mysqli_num_rows($manufacturers_result) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($manufacturers_result)){ ?>

								<option value="<?= $row['manufacturer_id'] ?>"><?= $row['name'] ?></option>

							<?php } ?>

						<?php } ?>
					</select>
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
		$product_name 			= $_POST['product_name'];
		$product_price 			= $_POST['product_price'];
		$product_quantity 		= $_POST['product_quantity'];
		$product_manufacturer 	= $_POST['manufacturer_id'];
		$date_added 			= date('Y-m-d h:i:s');
		$date_modified 			= date('Y-m-d h:i:s');

		$product_create_query = "INSERT INTO product (price, quantity, manufacturer_id,";
		$product_create_query .= " date_added, date_modified)";
		$product_create_query .= " VALUES (" . (float)$product_price . ", " . (int)$product_quantity . ", " . (int)$product_manufacturer;
		$product_create_query .= ", '$date_added', '$date_modified')";
		
		$result = mysqli_query($conn, $product_create_query);

		$last_product_id = mysqli_insert_id($conn);
		
		$product_description_create_query = "INSERT INTO product_description (product_id, name)";
		$product_description_create_query .= " VALUES (" . $last_product_id . ", '" . $product_name . "')";
		
		$result = mysqli_query($conn, $product_description_create_query);

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
