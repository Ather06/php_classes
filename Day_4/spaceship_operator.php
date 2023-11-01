<?php

$x = 15;
$y = 17;

$result = $x<=>$y;
if($result==1){
    echo "{$x} is greater than {$y}";
}elseif($result==0){
    echo "{$x} is equal to {$y}";
}elseif($result== -1){
    echo "{$x} is less than {$y}";
}