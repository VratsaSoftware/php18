<?php 
	session_start();

	echo session_id();
	$product1 = 'Orange';
	$product2 = 'Apple';
	$_SESSION['p1'] = $product1;
	$_SESSION['product2'] = $product2;

	$product1 = 'banana';
	$_SESSION['p1'] = $product1;
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Welcome - <?php $date = date('H:i:s'); 
	echo $date; $_SESSION['date'] = $date; ?></h1>

	<a href="second.php">Get Session Info</a>
</body>
</html>

<?php 
	session_destroy();

	unset($_SESSION['date']);

	echo $_SESSION['date'];

?>