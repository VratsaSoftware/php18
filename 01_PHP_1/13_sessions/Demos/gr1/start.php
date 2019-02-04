<?php 
session_start();

echo session_id();

$product1 = 'Apple';
$product2 = 'Grape';

$_SESSION['product1'] = $product1;
$_SESSION['product2'] = $product2;

$product1 = 'Orange';

$_SESSION['product1'] = $product1;

unset($_SESSION['product1']);

// $_SESSION['product1'] = $product1;


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Welcome - current time <?php echo date('H:i:s') ?></h1>
	<a href="second_page.php">Second Page</a>

</body>
</html>
<?php
	session_destroy();

	echo $_SESSION['product1'];
 ?>