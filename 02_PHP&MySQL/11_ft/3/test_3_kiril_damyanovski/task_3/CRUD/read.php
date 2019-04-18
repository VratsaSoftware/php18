<?php 
$title = 'Read';
include "includes/header.php";

$read_query = "SELECT hotels.*, destinations.destination_name FROM `hotels`";
$read_query .= " JOIN destinations ON destinations.destination_id=hotels.destination_id ";

// Date_deleted check

$read_query .= "WHERE hotels.date_deleted IS NULL";

$read_result = mysqli_query($conn, $read_query);

?>
<div class="container">
	<div class="row justify-content-md-center">
		<h1>CRUD</h1>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">
			<?php if(mysqli_num_rows($read_result) > 0){ ?>

				<!-- Table -->

				<table class="table table-hover table-dark table-bordered">
					<thead>
						<tr>
							<th>Hotel Name</th>
							<th>Destination</th>
							<th>Rooms</th>
							<th>***</th>
							<th>***</th>
							<th>***</th>
						</tr>
					</thead>
					<tbody>

						<!-- Reading the info from the DB (this in the table)-->

						<?php while($row = mysqli_fetch_assoc($read_result)){ ?>
							<tr>
								<td><?= $row['hotel_name']?></td>
								<td><?= $row['destination_name']?></td>
								<td><?= $row['rooms']?></td>

								<!-- Updating button -->
								<!-- In 'href' is the id for the specific "hotel" -->
								<td class="text-center">
									<a href="update.php?hotel=<?= $row['hotel_id'] ?>" class="btn btn-warning">
										UPDATE
									</a>
								</td>

								<!-- Soft delte button -->
								<!-- In 'href' is the id for the specific "hotel" -->
								<td class="text-center">
									<a href="soft_delete.php?hotel=<?= $row['hotel_id'] ?>" class="btn btn-danger">
										SOFT DELETE
									</a>
								</td>

								<!-- Delete button -->
								<!-- In 'href' is the id for the specific "hotel" -->
								<td class="text-center">
									<a href="delete.php?hotel=<?= $row['hotel_id'] ?>" class="btn btn-danger">
										DELETE
									</a>
								</td>
							</tr>

						<!-- While end here -->

						<?php } ?>
					</tbody>
				</table>

			<!-- 'IF' end here -->

			<?php } else {
				echo "No result!";
			}?>

			<!-- Inserting button -->

			<div class="row justify-content-md-center">
				<a href="create.php" class="btn btn-secondary">
					Add new hotel
				</a>
			</div>
		</div>
	</div>
</div>
<?php 
include 'includes/footer.php';
?>
