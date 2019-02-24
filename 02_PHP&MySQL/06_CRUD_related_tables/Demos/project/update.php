<?php 
$title = 'Update';
include "includes/header.php";

$product_id = $_GET['product'];

$read_query = "SELECT p.product_id, pd.name AS product_name, p.price, p.quantity, m.name AS manufacturer_name FROM ";
$read_query .= "product p JOIN product_description pd ON p.product_id=pd.product_id ";
$read_query .= "JOIN manufacturer m ON p.manufacturer_id=m.manufacturer_id ";
$read_query .= "WHERE p.product_id=". $product_id;

$result = mysqli_query($conn, $read_query);

$row_product = mysqli_fetch_assoc($result);



$namufacturers_query = "SELECT * FROM manufacturer";
$manufacturers_result = mysqli_query($conn, $namufacturers_query);



?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Update</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="product_name">Product name</label>
					<input type="text" class="form-control" id="product_name" name="product_name" value="<?= $row_product['product_name'] ?>">
				</div>
				<div class="form-group">
					<label for="product_price">Product price</label>
					<input type="text" class="form-control" id="product_price" name="product_price" value="<?= $row_product['price'] ?>">
				</div>
				<div class="form-group">
					<label for="product_name">Product quantity</label>
					<input type="text" class="form-control" id="product_quantity" name="product_quantity" value="<?= $row_product['quantity'] ?>">
				</div>
				<div class="form-group">
					<label for="manufacturer">Example select</label>
					<select class="form-control" id="manufacturer" name="manufacturer_id">
						<?php if(mysqli_num_rows($manufacturers_result) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($manufacturers_result)){ ?>

								<option value="<?= $row['manufacturer_id'] ?>" selected="<?php if( $row['manufacturer_id'] == $row_product['manufacturer_id']) { echo true; }?>"><?= $row['name'] ?></option>

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

		//to do add hidden field product id
		$product_update_query = "UPDATE product SET price=$product_price, quantity=$product_quantity, manufacturer_id=$product_manufacturer, date_modified=$date_modified ";
		$product_update_query = "WHERE product_id = $product_id";
		$result = mysqli_query($conn, $product_update_query);

		$product_update_query = "UPDATE product_description SET name=$product_name ";
		$product_update_query = "WHERE product_id = $product_id";	
			
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
