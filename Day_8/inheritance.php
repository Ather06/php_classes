<?php
class Car{
    // properties declare
    public $name;
    public $color;

        // methods declare
    function __construct($name, $color){
        $this -> name  = $name;
        $this -> color = $color;
    }
    function intro(){
        echo "This is a {$this -> name} and it's color {$this -> color}";
    }
}
class Honda extends Car{   // extends keyword use to add 
    function message(){
        echo "Am I a fruit or car? ";
    }
}
$honda = new Honda('Honda', 'Black');
$honda -> message();
$honda -> intro();


?>