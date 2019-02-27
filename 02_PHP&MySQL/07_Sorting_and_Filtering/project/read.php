<?php 
$title = 'Read';
include "includes/header.php";

$read_query = "SELECT p.product_id, pd.name AS product_name, p.price, p.quantity, m.name AS manufacturer_name FROM ";
$read_query .= "product p JOIN product_description pd ON p.product_id=pd.product_id ";
$read_query .= "JOIN manufacturer m ON p.manufacturer_id=m.manufacturer_id";
// case - no sort - sort id
if( isset($_GET['submit'])){
	
	if( $_GET['sort'] == 'name_asc'){
		$sort_by = 'pd.name';
		$sort_direction = 'ASC';
	} else if( $_GET['sort'] == 'name_desc' ) {
		$sort_by = 'pd.name';
		$sort_direction = 'DESC';
	} elseif ( $_GET['sort'] == 'man_asc' ) {
		$sort_by = 'm.name';
		$sort_direction = 'ASC';
	} elseif ( $_GET['sort'] == 'man_desc' ) {
		$sort_by = 'm.name';
		$sort_direction = 'DESC';
	}

	$limit = $_GET['limit'];
	$read_query .= " ORDER BY ({$sort_by}) {$sort_direction} LIMIT {$limit}";
}

$read_result = mysqli_query($conn, $read_query);

?>
<div class="container">
	<div class="row justify-content-md-center mb-2">
		<h2>Read</h2>
	</div>
	<div class="row justify-content-md-center mb-2">
		<form action="" method="get">
			<div class="form-row">
				<div class="col-sm-5">
					<select class="custom-select" name="sort">
						<option value="name_asc">Sort by name A-Z</option>
						<option value="name_desc">Sort by name Z-A</option>
						<option value="man_asc">Sort by manufacturer A-Z</option>
						<option value="man_desc">Sort by manufacturer Z-A</option>
					</select>	
				</div>
				<div class="col-sm-5">
					<select class="custom-select" name="limit">
						<option value="2">2</option>
						<option value="5">5</option>
						<option value="10">10</option>
					</select>	
				</div>
				<div class="col-sm-2">
					<input type="submit" name="submit" class="btn btn-success" value="sort">
				</div>
			</div>
		</form>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">
			<?php if(mysqli_num_rows($read_result) > 0){ ?>
				<table class="table table-hover table-dark table-bordered">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Product Price</th>
							<th>Product Qantity</th>
							<th>Product Manufacturer</th>
							<th>***</th>
							<th>***</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = mysqli_fetch_assoc($read_result)){ ?>
							<tr>
								<td><?= $row['product_name']?></td>
								<td><?= $row['price']?></td>
								<td><?= $row['quantity']?></td>
								<td><?= $row['manufacturer_name']?></td>
								<td class="text-center">
									<a href="update.php?product=<?= $row['product_id'] ?>" class="btn btn-warning">UPDATE</a>
								</td>
								<td class="text-center">
									<a href="delete.php?product=<?= $row['product_id'] ?>" class="btn btn-danger">DELETE</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } else {
				echo "No result!";
			}?>
			<div class="row justify-content-md-center">
				<a href="create.php" class="btn btn-secondary">Add new product</a>
			</div>
		</div>
	</div>
</div>
<?php 
include 'includes/footer.php';
?>
