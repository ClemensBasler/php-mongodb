<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://localhost:27017");

$data = [
    "Timestamp" => "test",
    "wind_speed" => "lul",
    "wind_speed" => 5,
];

$whereArray = [
  "Timestamp" => "2018-08-30 14:00:10"
  // "TZ" => 1
];

// for ($i=0; $i < sizeof($queryParams); $i++) {
//   $entries[$queryParams['entries'][$i]] = 1;
// }

$client2 = $client->weatherdata->seconds_10_raw;

// $entries = ["Timestamp", "wind_speed"];
//
// for ($i=0; $i < sizeof($entries) ; $i++) {
//   $entries[$i] = true;
// }

$entries = ['Timestamp'=> 1, 'TZ'=> 1];

$test = array('Timestamp' => true);

$data = $client2->find(array(), $test)->toArray();

// $data2 = $client->test->users->find(array(), array("a" => 1, "b" => 1))->toArray();

// $data = $client2->distinct('Timestamp');

// $data = $client2->aggregate([["$group"=> [ "_id"=> [ "Timestamp" => "$Timestamp", "wind_speed"=> "$wind_speed" ]]]]);

json_encode($data);

// var_dump($data);

foreach ($data[0] as $key => $value) {
  // code...
  echo $key."\n";
}
