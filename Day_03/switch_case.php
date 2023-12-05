<?php

$n = 13;
$r = $n % 2;
switch($r){
    case 0:
        echo "{$n} is a even number \n";
        break;
    default:
        echo "{}$n is a odd number \n";
}

//nested switch case use

$color = 'green';
switch($color){
    /*case 'red':
        echo "Red is my favourite color";
        break;
    case 'green':
        echo "Green is my favourite color";
        break; */
    case 'red':
    case 'green':
        echo ucwords($color)." is my favourite color";
        break;
    case 'blue':
        echo "Blue is not my favourite color";
        break;
    default:
    echo "This color is ok";
}