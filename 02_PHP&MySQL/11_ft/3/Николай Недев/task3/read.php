<?php 
$title = 'Read';
include "includes/header.php";

$read_query = "SELECT `hotel_id`,`hotel_name`,`rooms`, h.date_deleted, h.destination_id, destination_name FROM hotels h JOIN destinations d ON h.destination_id = d.destination_id WHERE h.date_deleted IS NULL";

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
							<th>Hotel name</th>
							<th>Rooms</th>
							<th>Destination</th>
							<th>***</th>
							<th>***</th>
							<th>***</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = mysqli_fetch_assoc($read_result)){ ?>
							<tr>
								<td><?= $row['hotel_name']?></td>
								<td><?= $row['rooms']?></td>
								<td><?= $row['destination_name']?></td>
								<td class="text-center">
									<a href="update.php?hotel=<?= $row['hotel_id'] ?>" class="btn btn-warning">UPDATE</a>
								</td>
								<td class="text-center">
									<a href="soft_delete.php?hotel=<?= $row['hotel_id'] ?>" class="btn btn-danger">SOFT DELETE</a>
								</td>
								<td class="text-center">
									<a href="delete.php?hotel=<?= $row['hotel_id'] ?>" class="btn btn-danger">DELETE</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } else {
				echo "No result!";
			}?>
			<div class="row justify-content-md-center">
				<a href="create.php" class="btn btn-secondary">Add new hotel</a>
			</div>
		</div>
	</div>
</div>
<?php 
include 'includes/footer.php';
?>
