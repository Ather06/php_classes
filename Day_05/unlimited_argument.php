<?php

function sum(int ...$numbers):int{
    $result = 0;
    for($i = 0; $i < count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}
$a = sum(10,20,30,40);
echo $a;
var_dump($a);