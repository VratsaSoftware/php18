<?php 

$str = 'test';
$str_mb = 'тест';

// echo strlen($str);
echo mb_strlen($str_mb);

var_dump(mb_split('', $str_mb));