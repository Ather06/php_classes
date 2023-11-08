<?php

function doTheTaskA(){
    echo "Step A done\n";
}
function doTheTaskB(){
    echo "Step B done\n";
}
function doTheTaskC(){
    echo "Step C done\n";
}
function doTheTaskD(){
    echo "Step D done\n";
}
function doTheTaskE(){
    echo "Step E done\n";
}

function doTheLargerTask(){
    doTheTaskA();
    doTheTaskB();
    doTheTaskC();
    doTheTaskD();
    doTheTaskE();
}
echo doTheLargerTask();