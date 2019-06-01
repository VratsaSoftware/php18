<?php
  // You can simulate a slow server with sleep
  // sleep(2);

function is_ajax_request() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
  $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(!is_ajax_request()) {
  exit;
}

$query = isset($_GET['q']) ? $_GET['q'] : '';

function str_starts_with($choice, $query){

  return strpos($choice, $query) === 0;

}

// function str_contains($choice, $query){

//   return strpos($choice, $query) !== 0;

// }

function search($query, $choices){

  $matches = [];
  foreach($choices as $choice){
    if(str_starts_with($choice, $query)){

     $matches[] = $choice;
   }
 }

 return $matches;
}

  // find and return search suggestions as JSON

$choices = file('includes/us_passenger_trains.txt', FILE_IGNORE_NEW_LINES);
$suggestions = search($query, $choices);
sort($suggestions);
$max_suggestions = 5;
$top_suggestions = array_slice($suggestions, 0, $max_suggestions);
echo json_encode($top_suggestions);