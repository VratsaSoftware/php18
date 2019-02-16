<?php 
include 'db_connect.php';
//DO NOT HARD CODE ID!

$read_q = "SELECT country_id, name FROM `country` WHERE country_id = 256";

$result = mysqli_query($conn, $read_q);
//we expect as a result only one row
//so we do not need the while cycle

$row = mysqli_fetch_assoc($result);

//CHECK THE RESULT
//var_dump($row);
//GOOD PRACTICE - ALWAYS CHECK IF VARIABLES ARE SET OR NOT NULL AND THEN USE THEM

if ($row) {
	$country_name = $row['name'];
} else {
	$country_name = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="country_name" value="<?= $country_name ?>">
		<input type="submit" name="submit">
	</form>

<?php 
if (isset($_POST['submit'])) {
	
$updated_country_name = $_POST['country_name']; 

$update_q = "UPDATE `country` SET `name` = '$updated_country_name' WHERE country_id=256";

$result = mysqli_query($conn, $update_q);

if ($result) {

	echo 'You updated row in DB successfully!';
	//redirect TO READ HERE
	header("Location: read.php");
} else {
	echo "Try again!";
} 
}
?>	
</body>
</html>
