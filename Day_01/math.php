<?php
/*
Arithmatic operator

+ = plus
- = minus
* = multiplication
/ = division
% = modules

assainment operator
+=, -=, *=, /=

*/
$number1 = 50;
$number2 = 30;
$sum = $number1 + $number2;
echo $sum ."\n";
$minus = $number1 - $number2;
echo $minus ."\n";
$divide = $number1 / $number2;
echo $divide ."\n";
$vagshes = $number1 % $number2;
echo $vagshes ."\n";

//shorthand math calculation

$number = 12;
$number +=5; //shorthand sum

$number -=5; //shorthand minus

$number *=5; // shorthand multiple

$number /=6; // shorthand divide

$number %=7; //shorthand vagshes

echo $number ."\n";

$fNumber = 15;
$fNumber++; // number + 1, number+=1
echo $fNumber;