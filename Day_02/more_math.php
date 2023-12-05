<?php

//aksathe 2 ta variable assign kora
$a = 8;
$x = $y = $a;
echo $x, "\n", $y;
echo "\n";

// difference between n++ and ++n

$n = 7;
$m = $n++;
echo $m , "\n", $n;

/*
$m = $n++ mane holo..
$m = $n
$n = $n+1
*/
echo "\n";

$n = 7;
$m = ++$n;
echo $m , "\n", $n;

/*
$m = ++$n mane holo..
$n = $n+1
$m = $n

*/
