<?php

$foods = [
    'Vegetables' => 'brinjal, lal shak, alu',
    'drinks' => 'water, milk',
    'fruits' => 'orange, apple, mango'
];
// echo $foods['drinks'];

$foods['drinks'].=", orange, banana";
echo $foods['drinks'];

foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}