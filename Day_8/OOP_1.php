<?php

class Fruit{
    // properties apply
    public $name;
    public $color;

    // method apply
    function setName($name){
        $this -> name = $name;
    }
    function getName(){
        return $this -> name;
    }

    function setColor($color){
        $this -> color = $color;
    }
    function getColor(){
        return $this -> color;
    }
}

$apple = new Fruit();
$apple -> setName('Apple');
$apple -> setColor('Red');
echo "Name: " . $apple -> getName();
echo "\n";
echo "Color: " . $apple -> getColor();

?>