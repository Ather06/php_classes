<?php

$people = array(
    "Jamal",
    "Kamal",
    "Rafiq",
    123
);

$people[3] = "Ayan";
$n = count($people);
for($i = 0; $i < 4; $i++){
    echo $people[$i]."\n";
}
echo "\n";
/*array_pop() function remove the last element from the array
*/
array_pop($people);

/*array_shift() function remove the first element from the array
*/
array_shift($people);

/*
array_push function add last element to array 
*/
array_push($people, "Rahim");

/*
array_unshift function add first element to array 
*/

array_unshift($people, "Salam");

$n = count($people);
for($i = 0; $i < $n; $i++){
    echo $people[$i]."\n";
}