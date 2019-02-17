<?php 
include "includes/header.php";
?>
	<div class="col-9">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="country" placeholder="Country name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="iso_code_2" placeholder="ISO CODE 2">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="iso_code_3" placeholder="ISO CODE 3">
			</div>
			<input type="submit" name="submit" value="Create">
		</form>
	</div>
	<?php 
	if(isset($_POST['submit'])){
		$country 	= $_POST['country'];
		$iso_code_2 = $_POST['iso_code_2'];
		$iso_code_3 = $_POST['iso_code_3'];

		$q_create = "INSERT INTO `country`(`name`, `iso_code_2`, `iso_code_3`) VALUES ('$country','$iso_code_2','$iso_code_3')";

		$result = mysqli_query($conn, $q_create);

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
