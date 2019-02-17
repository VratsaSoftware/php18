<?php 
include 'db_connect.php';

$q_read = "SELECT * FROM `country` WHERE 1";

$result = mysqli_query($conn, $q_read);

// var_dump($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php 
	if(mysqli_num_rows($result) > 0){
?>	
	<a class="alert-link" href="create.php">Add new country</a>
		<table class="table" border=1>
			<tr>
				<td>#</td>
				<td>име</td>
				<td>ISO CODE 2</td>
				<td>ISO CODE 3</td>
				<td>***</td>
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
			</tr>
	<?php 
		}//end while
	?>
		</table>
<?php
	}//end if rows
?>
	
</body>
</html>