<?php 

$consumption = $_POST['consumption'];
$condition = $_POST['conditions'];

$new_consumption = $consumption + ($consumption*$condition)/100;

echo $new_consumption;
