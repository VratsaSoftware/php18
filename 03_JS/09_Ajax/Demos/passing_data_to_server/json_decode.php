<?php 
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));

//When TRUE, returned objects will be converted into associative arrays. 
var_dump(json_decode($json, true));