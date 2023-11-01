<?php

$default_lat = 25.8;
$default_lon = 89.3;
$user_lat = 35 ;
// $lat =  isset($user_lat) ? $user_lat : $default_lat; // turnary operator
$lat = $user_lat ?? $default_lat;

echo $lat;

