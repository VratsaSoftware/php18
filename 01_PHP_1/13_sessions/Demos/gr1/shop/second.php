<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Storing an array with a session</title>
</head>
<body>
 <h1>Product Choice Page</h1>
 <?php
 if (isset($_POST['form_products'])) {
 if (!empty($_SESSION['products'])) {
 $products = array_unique(
 	array_merge(unserialize($_SESSION['products']),
 			$_POST['form_products']));
 	$_SESSION['products'] = serialize($products);
 } else {
 	$_SESSION['products'] = serialize($_POST['form_products']);
 }
	echo "<p>Your products have been registered!</p>";
}
