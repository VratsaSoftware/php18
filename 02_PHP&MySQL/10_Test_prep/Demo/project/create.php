<?php 
$title = 'Create';
include "includes/header.php";

$countries_query = "SELECT * FROM countries";
$countries_result = mysqli_query($conn, $countries_query);

?>
<div class="container">
	<div class="row justify-content-md-center">
		<h2>Create</h2>
	</div>
	<div class="row justify-content-md-center">			
		<div class="col-sm-10">			
			<form method="post" action="">
				<div class="form-group">
					<label for="cinema_name">Cinema name</label>
					<input type="text" class="form-control" id="cinema_name" name="cinema_name" placeholder="Cinema name here ...">
				</div>
				<div class="form-group">
					<label for="cinema_places">Places</label>
					<input type="text" class="form-control" id="cinema_places" name="cinema_places" placeholder="Places here ...">
				</div>				
				<div class="form-group">
					<label for="country">Select country</label>
					<select class="form-control" id="country" name="country_id">
						<?php if(mysqli_num_rows($countries_result) > 0){ ?>
							
							<?php while($row = mysqli_fetch_assoc($countries_result)){ ?>

								<option value="<?= $row['country_id'] ?>"><?= $row['country_name'] ?></option>

							<?php } ?>

						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-success">SAVE cinema</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
if(isset($_POST['submit'])){
		$cinema_name 			= $_POST['cinema_name'];
		$cinema_places 			= $_POST['cinema_places'];
		$country_id 			= $_POST['country_id'];
		
		$create_query = "INSERT INTO cinemas (cinema_name, places, country_id)";
		$create_query .= " VALUES ('" . $cinema_name . "', " . (int)$cinema_places . ", " . (int)$country_id . ")";
		var_dump($create_query);
		
		$result = mysqli_query($conn, $create_query);
		
		if($result){
		// echo "Success!";
			header('Location: read.php');
		} else {
			echo mysqli_error($conn);
		// echo "Please, try again later!";
		}
	}
include 'includes/footer.php';
?>
