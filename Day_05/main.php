<?php

include_once "function.php";
include_once "type_hinting.php";
include_once "default_value.php";

$x = 11;
if(isEven($x)) //argument
{
    echo "{$x} is even number";
}else{
    echo "{$x} is odd number";
}
echo "\n";

//type_hinting
$y = 7;
echo "Factorial of {$y} is ".factorial($y);

echo "\n";

// default_value
$ft = "Coffee";
$fi = "2 cup";
serve($ft,$fi);