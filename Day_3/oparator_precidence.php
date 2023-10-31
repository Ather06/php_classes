<?php

$a = false || true; // true
$b = false or true; // ($b = false)=false or true
var_dump($a, $b);

echo "\n";


$m = true && false; // false cause and er belay false hoi jekono akta false asle
$n = true and false; // ($n = true)=true and false mane holo true
var_dump ($m , $n);
