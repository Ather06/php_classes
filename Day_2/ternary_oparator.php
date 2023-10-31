<?php

$n = 12;
if(12 == $n){
    echo "The number is same";
}else{
    echo "The number is not same";
}
echo "\n";

//use ternary oparator

$numberInWord = (12 == $n) ? "The number is same" : "The number is not same";
echo $numberInWord;


echo "\n";

$result = (14 % 2 == 0) ? "Even" : "odd";
echo $result;