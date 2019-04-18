<?php 
$title = 'Read';
include "includes/header.php";

$read_query = "SELECT d.destination_id, d.destination_name, c.name FROM ";
$read_query .= "destinations d JOIN countries c ON d.country_id = c.country_id ";
$read_query .= "WHERE d.date_deleted IS NULL";

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
							<th>Destinations Name</th>
							<th>Country</th>
							<th>***</th>
							<th>***</th>
							<th>***</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = mysqli_fetch_assoc($read_result)){ ?>
							<tr>
								<td><?= $row['destination_name']?></td>
								<td><?= $row['name']?></td>
								<td class="text-center">
									<a href="update.php?destinations=<?= $row['destination_id'] ?>" class="btn btn-success">UPDATE</a>
								</td>
								<td class="text-center">
									<a href="soft_delete.php?destinations=<?= $row['destination_id'] ?>" class="btn btn-info">SOFT DELETE</a>
								</td>
								<td class="text-center">
									<a href="delete.php?destinations=<?= $row['destination_id'] ?>" class="btn btn-danger">DELETE</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } else {
				echo "No result!";
			}?>
			<div class="row justify-content-md-center">
				<a href="create.php" class="btn btn-warning">Add new destination</a>
			</div>
		</div>
	</div>
</div>
<?php 
include 'includes/footer.php';
?>
