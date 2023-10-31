<?php

$n = 17;
if($n % 2 == 0){
    echo "$n is even number";
}else{
    echo "$n is odd number";
}

echo PHP_EOL;
//if alternative syntax

if($n % 2 == 0):
    echo "$n is even number";
    echo PHP_EOL;
    echo "text";
else:
    echo "$n is odd number";
    echo PHP_EOL;
    echo "text++";
endif;
echo PHP_EOL;

// switch case alternative syntax

switch($n % 2):
    case 0:
        echo "$n is even number";
        echo PHP_EOL;
        echo "text";
    default:
        echo "$n is odd number";
        echo PHP_EOL;
        echo "text++";
endswitch;
