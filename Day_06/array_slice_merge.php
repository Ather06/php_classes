<?php

$car = array("Volvo", "Honda", "Audi", "BMW", "Mercidies", "Lambergini");

$newCar1 = array_slice($car, 0, 3);
$newCar2 = array_slice($car, 3, null, true);
$newCar = array_merge($newCar1, $newCar2);
print_r($newCar);

$newCarPlus = $newCar1 + $newCar2;
print_r($newCarPlus);