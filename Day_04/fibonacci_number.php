<?php

$veryOld = 0;
$old = 1;
$new = 1;

for($i = 0; $i < 20 ; $i++){
    echo $veryOld." ";
    $old = $new;
    $new = $veryOld + $old;
    $veryOld = $old;
     
}
echo $veryOld." ";



/* explain
initial value
v = 0
o = 1
n = 1

1st loop
v = 1
o = 1 
n = 2

2nd loop
v = 1
o = 2
n = 3

*/