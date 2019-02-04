<?php 
session_start();

echo session_id();

echo $_SESSION['product1'];
echo ' - ';
echo $_SESSION['product2'];