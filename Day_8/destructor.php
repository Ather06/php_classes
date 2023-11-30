<?php
class Fruit{
    public $name;

    function __construct($name){
        $this -> name = $name;
    }
    function __destruct(){
        echo "This fruit name is {$this -> name}";
    }
}
$fruit1 = new Fruit('Banana');

?>