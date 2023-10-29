<?php
/*
different types of data type..

1. Integer (int)
2.Double/ float
3.string
4.Boolean (bool)
5.Null
6.Object
7.Resourse

*/
// data type information janar jonno var_dump use kora hoi

// string data type
$name = 'Bangladesh';
var_dump ($name);
echo "\n";

// integer data type
$age = 12;
var_dump ($age);
echo "\n";

// boolean data type
$result = true;
var_dump ($result);
echo "\n";

// float data type
$number = 3.1416;
var_dump ($number);

//Printf er kaj
$fname = 'Ather';
$lname = 'Biswas';
printf("His %s name is %s %s ", "Full", $fname,$lname);
echo "\n";
/*
seiral 
%s = Full
%s = $fname
%s = $lname

*/
// 3 ways to write same segment sentence
$day1 = 'Saturday';
$day2 = 'Sunday';

// first way is to use dot sign and direct variable name which is wrap without double inverted commma
echo "First day is " .$day1." and second day is ".$day2."\n";

// second way is to use second bracket sign and variable name which is wrap double inverted comma
echo "First day is {$day1} and second day is {$day2} \n";

//third way is to use %s which is wrap double inverted commma and %s serial means 1,2,3 variable
printf("First day is %s and second day is %s", $day1,$day2);