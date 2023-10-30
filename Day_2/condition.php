<?php

$n = 16;
if($n % 2 ==0){
    echo ("$n is even number"); // varible k output a dekhate hole aita k double quote er moddhe rakhte hobe
}else{
    echo ("$n is odd number");
}
echo "\n";

if($n > 10){
    echo ("$n is greater number than 10");
}else{
    echo ("$n is less number than 10");
}
echo "\n";

$rahim = 500;
$karim = 500;
if($rahim == $karim){
    echo "Both have same amount of money";
}elseif ($rahim > $karim) {
    echo "Rahim has more money than karim";
}elseif($rahim < $karim){
    echo "Rahim has less money than karim";
}

echo "\n";
//  check a person is a teenger or not 

$age = 19;
if($age >= 13 && $age <= 19){
    echo "This person is a teenager";
}else{
    echo "This person is not a teenager";
}