<?php 
$title = 'Read';

include "includes/header.php";

$q_read = "SELECT h.hotel_id, h.hotel_name, des.destination_name, c.name, h.rooms, h.date_deleted FROM `hotels` AS h";
$q_read .= " JOIN destinations as des ON des.destination_id=h.destination_id";
$q_read .= " JOIN countries as c ON c.country_id=des.country_id WHERE h.date_deleted IS NULL";

$result = mysqli_query($conn, $q_read);

if(mysqli_num_rows($result) > 0){
?>	

	<table class="table table-hover table-dark table-bordered">
		<tr>
			<th>#</th>
			<th>Hotel Name</th>
			<th>Destination</th>
			<th>Country</th>
			<th>Rooms</th>
			<th>***</th>
			<th>***</th>
			<th>***</th>
		</tr>
	<?php
		while($row = mysqli_fetch_assoc($result)){
	?>
		<tr>
			<td>
				<?= $row['hotel_id']?>
			</td>
			<td>
				<?= $row['hotel_name']?>
			</td>
			<td>
				<?= $row['destination_name'] ?>
			</td>
			<td>
				<?= $row['name'] ?>
			</td>
			<td>
				<?= $row['rooms'] ?>
			</td>
			<td>
				<a class="btn btn-outline-warning" href="update.php?id=<?=$row['hotel_id']?>">Update</a>
			</td>
			<td>
				<a class="btn btn-outline-danger" href="soft_delete.php?id=<?=$row['hotel_id']?>">Soft Delete</a>
			</td>
			<td>
				<a class="btn btn-danger" href="delete.php?id=<?=$row['hotel_id']?>">Delete</a>
			</td>
		</tr>
	<?php 
		}//end while
	?>
	</table>
	<div class="row justify-content-md-center">
		<a href="create.php" class="btn btn-secondary">Add new hotel</a>
	</div>
<?php
	}//end if rows
include 'includes/footer.php';


