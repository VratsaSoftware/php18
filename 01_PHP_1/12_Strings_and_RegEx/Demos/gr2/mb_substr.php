<?php 
$str = 'Демо текст';
$length = mb_strlen($str);
for ($i = 0; $i < $length; $i += 1) {

        echo mb_substr($str, $i, 1, 'UTF-8') . ' ';

    }