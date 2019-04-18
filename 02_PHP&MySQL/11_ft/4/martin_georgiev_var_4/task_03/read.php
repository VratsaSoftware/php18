<?php
$title = "Read";
include "includes/head.php";

$read_q = "SELECT d.destination_id, d.destination_name, c.name AS country ";
$read_q .= "FROM destinations d JOIN countries c ON d.country_id = c.country_id ";
$read_q .= "WHERE d.date_deleted IS NULL AND c.date_deleted IS NULL";
$result = mysqli_query($conn, $read_q);

echo '<h2 class="text-primary">'."$title".'</h2>';

if (mysqli_num_rows($result) > 0) {
	echo '<table style="width: 75%;" class="table table-bordered">';
	$keys = array_keys(mysqli_fetch_assoc(mysqli_query($conn, $read_q)));

	echo '<thead><tr>';
	for ($i = 0; $i < count($keys); $i++) {
		echo '<th class="bg-primary">'.$keys[$i].'</th>';
	}
	echo '</tr></thead>';
	
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<tr>';
		foreach ($row as $value) {
			echo '<td>'.$value.'</td>';
		}?>

		<td><a class="text-primary" href="update.php?id=<?=$row['destination_id']?>">Update</a></td>
		<td><a class="text-danger" href="soft_delete.php?id=<?=$row['destination_id']?>">Soft Delete</a></td>
		<td><a class="text-danger" href="delete.php?id=<?=$row['destination_id']?>">Delete</a></td>
		
		<?php
		echo '</tr>';
	}
	echo '</table>';
} else {
	echo 'No results!';
}
echo '<a class="btn btn-primary add_btn" href="create.php">'.'Add'.'</a>';

include "includes/footer.php";