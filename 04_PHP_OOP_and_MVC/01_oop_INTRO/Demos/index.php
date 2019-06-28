<?php 
include 'User.php';

// $pesho = new User();
// $gosho = new User();

// // var_dump($pesho);
// // var_dump($gosho);

// // echo $pesho->role;

// $pesho->username = 'Pesho';
// $gosho->role = 'Editor';

// // echo 'Pesho`s username is ' . $pesho->username;

// $pesho->get_user_role();
// echo "<p></p>";
// $gosho->get_user_role();
// echo "<p></p>";
// $pesho->change_user_role('Admin');
// $pesho->get_user_role();

$toshko = new User('toshko', 'secret');
