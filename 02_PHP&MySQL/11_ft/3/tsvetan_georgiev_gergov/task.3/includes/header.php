<?php 

include 'db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->


    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../create.php">Add new data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../update.php">update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../delete.php">Del</a>
            </li>
        </ul>
    </div>
</nav>