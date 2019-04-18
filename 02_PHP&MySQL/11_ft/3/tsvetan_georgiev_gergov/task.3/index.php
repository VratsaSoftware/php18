<?php 
$title = 'Read';
include "includes/header.php";

$read_query = "SELECT * FROM hotels WHERE 1";

$read_result = mysqli_query($conn, $read_query);

?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Read</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">
			<?php if(mysqli_num_rows($read_result) > 0){ ?>
				<table class="table table-hover table-dark table-bordered">
					<thead>
						<tr>
							<th>Nmuber</th>
							<th>Name of Hotel</th>
							<th>Destination</th>
							<th>Rooms</th>
							<th>Modify</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = mysqli_fetch_assoc($read_result)){ ?>

							<tr>
								<td><?= $row['hotel_id']?></td>
								<td><?= $row['hotel_name']?></td>
								<td><?= $row['destination_id']?></td>
								<td><?= $row['rooms']?></td>
								<td class="text-center">
									<a href="update.php?hotel_id=<?= $row['hotel_id'] ?>" class="btn btn-warning">UPDATE</a>
								</td>
								<td class="text-center">
									<a href="delete.php?hotel_id=<?= $row['hotel_id'] ?>" class="btn btn-danger">DELETE</a>
								</td>
							</tr>
						<?php }  ?>
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
