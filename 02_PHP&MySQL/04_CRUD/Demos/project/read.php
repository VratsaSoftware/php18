<?php 
include "includes/header.php";

$q_read = "SELECT * FROM `country` WHERE 1";

$result = mysqli_query($conn, $q_read);

// var_dump($result);


	if(mysqli_num_rows($result) > 0){
?>	
	<a class="alert-link" href="create.php">Add new country</a>
		<table class="table" border=1>
			<tr>
				<th>#</th>
				<th>име</th>
				<th>ISO CODE 2</th>
				<th>ISO CODE 3</th>
				<th>***</th>
				<th>***</th>
			</tr>
	<?php
		while($row = mysqli_fetch_assoc($result)){
	?>
			<tr>
				<td>
					<?= $row['country_id']?>
				</td>
				<td>
					<?= $row['name']?>
				</td>
				<td>
					<?= $row['iso_code_2'] ?>
				</td>
				<td>
					<?= $row['iso_code_3'] ?>
				</td>
				<td>
					<a class="btn btn-outline-warning" href="update.php?id=<?=$row['country_id']?>">Update</a>
				</td>
				<td>
					<a class="btn btn-outline-danger" href="delete.php?id=<?=$row['country_id']?>">Delete</a>
				</td>
			</tr>
	<?php 
		}//end while
	?>
		</table>
<?php
	}//end if rows
include 'includes/footer.php';


