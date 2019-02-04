<?php 

$a = 1;
$b = 2;
$c = 3; 

var_dump(($a > $b) || ($c > $b));//true

$a = 4;
$b = 2;
$c = 3; 

var_dump(($a > $b) || ($c > $b));//true

$a = 4;
$b = 5;
$c = 3; 

var_dump(($a > $b) || ($c > $b));//false

$a = 4;
$b = 5;
$c = 6; 

var_dump(($a > $b) || ($c > $b));//