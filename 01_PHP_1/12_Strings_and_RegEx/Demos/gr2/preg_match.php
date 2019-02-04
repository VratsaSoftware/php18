<?php 

$pattern = '/(\+|00)359\s\(\d{2}\)(\s\d{3}){2}/';

$text = '+359 (88) 225 336 00359 (88) 225 336';

preg_match_all($pattern, $text, $matches);

echo '<pre>';
var_dump($matches);
echo '</pre>';