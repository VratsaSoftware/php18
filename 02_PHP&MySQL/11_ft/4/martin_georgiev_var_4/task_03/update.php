<?php
$title = "Update";
$id = $_GET['id'];

include 'includes/head.php';

$read_q = "SELECT d.destination_name, d.country_id, c.name FROM destinations d JOIN countries c ON d.country_id = c.country_id WHERE d.destination_id = $id";
$result = mysqli_query($conn, $read_q);
$main_row = mysqli_fetch_assoc($result);

$countries_q = "SELECT country_id, name FROM countries WHERE date_deleted IS NULL";
$countries_result = mysqli_query($conn, $countries_q);
?>
<a class="btn btn-primary btn_back" href="read.php">< Back</a>

<h2 class="text-primary">Update it!</h2>
<form action="" method="post" align="center">
	<div class="form-group">
		<label for="destin">Destination</label>
		<input type="text" class="form-control" id="destin" name="destination_name" value="<?=$main_row['destination_name']?>">
	</div>

	<div class="form-group">
		<label for="country">Country</label>
		<select class="form-control select" id="country" name="country_id">
			<?php if(mysqli_num_rows($countries_result) > 0){				
				while($row = mysqli_fetch_assoc($countries_result)){
				?>
					<option value="<?=$row['country_id']?>" <?php if ($row['name'] == $main_row['name']) { echo 'selected'; } ?>><?=$row['name']?></option>
			<?php } 
			} ?>
		</select>
	</div>

	<input class="btn btn-primary" type="submit" name="update" value="Save">
</form>
<?php
if (isset($_POST['update'])) {
	$destination_name = $_POST['destination_name'];
	$country_id = $_POST['country_id'];

	$update_q = "UPDATE destinations SET destination_name = '$destination_name', country_id = ".(int)$country_id." WHERE destination_id = $id";
	$result = mysqli_query($conn, $update_q);

	if ($result){
		header('Location: read.php');
	} else {
		echo mysqli_error($conn);
	}
}

include 'includes/footer.php';