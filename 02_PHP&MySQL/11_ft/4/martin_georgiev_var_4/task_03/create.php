<?php
$title = "Create";
include 'includes/head.php';

$countries_q = "SELECT country_id, name FROM countries WHERE date_deleted IS NULL";
$countries_result = mysqli_query($conn, $countries_q);
?>
<a class="btn btn-primary btn_back" href="read.php">< Back</a>
<h2 class="text-primary">Create new</h2>

<form action="" method="post" align="center">
	<div class="form-group">
		<label for="destin">Destination</label>
		<input type="text" class="form-control" id="destin" name="destination_name" placeholder="Destination name">
	</div>
	<div class="form-group">
		<label for="country">Country</label>
		<select class="form-control select" id="country" name="country_id">
			<?php if(mysqli_num_rows($countries_result) > 0){				
				while($row = mysqli_fetch_assoc($countries_result)) {
				?>
					<option value="<?=$row['country_id']?>"><?=$row['name']?></option>
			<?php } 
			} ?>
		</select>
	</div>
	<input class="btn btn-primary" type="submit" name="create" value="Create">
</form>

<?php
if (isset($_POST['create'])) {
	$destination_name = $_POST['destination_name'];
	$country_id = $_POST['country_id'];

	$create_q = "INSERT INTO destinations (destination_name, country_id) VALUES ('$destination_name', ".(int)$country_id.")";
	$result = mysqli_query($conn, $create_q);

	if ($result) {
		header("Location: read.php");
	} else {
		echo mysqli_error($conn);
	}
}

include 'includes/footer.php';