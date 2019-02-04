<?php 

$email = 'example@example.com';

$email_arr = explode('@', $email);

var_dump($email_arr);

echo $email_arr[0]; 

//b

$str = '\"\1+2/3*2:2-3/4*3';

$str_new = str_replace(['\\', '*', '-', '+', '/', ':'], ' ', $str);

echo $str_new;