<?php
class Fruit{
    public $name;

    function setName($name){
        $this -> name = $name;
    }
}

$apple = new Fruit();
$apple -> setName('Apple');

echo $apple -> name;


?>