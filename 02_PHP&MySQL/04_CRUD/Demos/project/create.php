<?php 
include 'db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="country" placeholder="Country name">
		<input type="text" name="iso_code_2" placeholder="ISO CODE 2">
		<input type="text" name="iso_code_3" placeholder="ISO CODE 3">
		<input type="submit" name="submit" value="Create">
	</form>
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
		echo "Please, try again later!";
	}
}
?>
</body>
</html>