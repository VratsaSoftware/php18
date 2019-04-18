<?php 
include "header.php";

$q_read = "SELECT * FROM `hotels` WHERE 1";

$result = mysqli_query($conn, $q_read);

// var_dump($result);


	if(mysqli_num_rows($result) > 0){
?>	
	<a class="alert-link" href="create.php">Add new hotel</a>
		<table class="table" border=1>
			<tr>
				<th>#</th>
				<th>Hotel Name</th>
				<th>Rooms</th>
				<th>Destination_id</th>
				<th>Update the hotel info</th>
				<th>Delte the hotel</th>
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
					<?= $row['rooms'] ?>
				</td>
				<td>
					<?= $row['destination_id'] ?>
				</td>
				<td>
					<a class="btn btn-outline-warning" href="update.php?id=<?=$row['hotel_id']?>">Update</a>
				</td>
				<td>
					<a class="btn btn-outline-danger" href="delete.php?id=<?=$row['hotel_id']?>">Delete</a>
				</td>
			</tr>
	<?php 
		}//end while
	?>
		</table>
<?php
	}//end if rows
include 'includes/footer.php';


