<?php

function writeMessage(){
    echo "Welcome to register account";
}

writeMessage();

echo "\n";

function isEven($n) // parameter
{
    if($n % 2 ==0){
        return true;
    }
    return false;
}