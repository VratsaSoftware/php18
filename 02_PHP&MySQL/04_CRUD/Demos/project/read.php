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
</head>
<body>
<?php 
	if(mysqli_num_rows($result) > 0){
?>
		<table border=1>
			<tr>
				<td>#</td>
				<td>име</td>
				<td>ISO CODE 2</td>
				<td>ISO CODE 3</td>
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