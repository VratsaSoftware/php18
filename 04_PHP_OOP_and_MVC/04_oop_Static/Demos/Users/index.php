<?php 
include 'User.php';
include 'NonRegUser.php';
include 'RegUser.php';

// $user = new User();
// $no_reg_user = new NonRegUser();
// $reg_user = new RegUser();


// echo User::$type;
// echo '<p></p>';
// echo NonRegUser::$type;
// echo '<p></p>';
// echo RegUser::$type;

User::getType();
echo '<p></p>';
NonRegUser::getType();
echo '<p></p>';
RegUser::getType();

echo "<p></p>";

User::getOwnType();
echo '<p></p>';
NonRegUser::getOwnType();
echo '<p></p>';
RegUser::getOwnType();


