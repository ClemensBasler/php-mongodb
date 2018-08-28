<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://localhost:27017");

$data = [
    "Timestamp" => "test",
    "wind_speed" => "lul",
    "wind_speed" => 5,
];


$collection = $client->weatherdata->seconds_10;

$result = $collection->insertOne($data);

echo "Inserted with Object ID '{$result->getInsertedId()}'";
