<?php 

require 'Square.php';
require 'Cube.php';


$square = new Square(5);

$cube = new Cube(10);

echo 'SQUARE SIDE = ' . $square->side;
echo "<p></p>";
echo 'CUBE SIDE = ' . $cube->side;
echo "<p></p>";
// echo 'SQUARE SIDE = ' . $square->get_side();
// echo "<p></p>";
// echo 'CUBE SIDE = ' . $cube->get_side();
// echo "<p></p>";
// echo 'NEW SQUARE SIDE = ' . $square->set_side(15);
// echo "<p></p>";
// echo 'NEW CUBE SIDE = ' . $cube->set_side(20);
// echo "<p></p>";
echo $square->calculate_area();
echo "<p></p>";
echo $cube->calculate_area();
echo "<p></p>";
echo $cube->calculate_volume();