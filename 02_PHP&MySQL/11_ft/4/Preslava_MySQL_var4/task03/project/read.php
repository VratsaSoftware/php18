<?php 
$title = 'Read';
include "includes/header.php";

$read_query = "SELECT destinations.destination_name, countries.name, destinations.destination_id FROM `destinations` JOIN countries ON countries.country_id=destinations.country_id  WHERE destinations.date_deleted IS NULL ";

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
							<th>Destination Name</th>
							<th>Country</th>
							<th>Update info</th>
							<th>Delete info</th>
							<th>Soft Delete info</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = mysqli_fetch_assoc($read_result)){ ?>
							<tr>
								<td><?= $row['destination_name']?></td>
								<td><?= $row['name']?></td>
								<td class="text-center">
									<a href="update.php?destination=<?= $row['destination_id'] ?>" class="btn btn-warning">UPDATE</a>
								</td>
								<td class="text-center">
									<a href="delete.php?destination=<?= $row['destination_id'] ?>" class="btn btn-danger">DELETE</a>
								</td>
								<td class="text-center">
									<a href="soft_delete.php?destination=<?= $row['destination_id'] ?>" class="btn btn-info">Soft DELETE</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } else {
				echo "No result!";
			}?>
			<div class="row justify-content-md-center">
				<a href="create.php" class="btn btn-secondary">Add new destination</a>
			</div>
		</div>
	</div>
</div>
<?php 
include 'includes/footer.php';
?>
