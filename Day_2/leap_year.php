<?php

// check any year is it leap year?
$year = 2015;
if($year % 4 ==0 && $year % 100 ==0 && $year % 400 ==0){
    echo "$year is a leap year";
}elseif ($year % 4 ==0 && $year % 100==0) {
    echo "$year is not a leap year";
}elseif ($year % 4 ==0) {
    echo "$year is  a leap year";
}else{
    echo "$year is not  a leap year";
}

echo "\n";

if(true || false){
    echo "wow";
}
/*
1.condition && belay jekono akta false hoi tobe false dekhabe .only 2 jaigay true hole true dekhabe .
2. condition || belay jekono akta true hoi tobe true dekhabe.only 2 jaigay false hole false dekhabe
*/
echo "\n";

//shorthand leap year check

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "$year is  a leap year";
}else{
    echo "$year is not  a leap year";
}
