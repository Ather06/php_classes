<?php

function sum(int ...$numbers):int{
    $result = 0;
    for($i = 0; $i < count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}

echo sum(10,20,30,40);