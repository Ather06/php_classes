<?php 
class Car{
    public $name;
    public $color;

    function __construct($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }
    function getName(){
        return $this -> name;
       // echo "This is a {$this -> name} brand car"."\n";
    }
    function getColor(){
        return $this -> color;
        //echo "It is color of {$this -> color}";
    }
}

$audi = new Car('Audi', 'Black'); // 2 ta parameter
//$audi -> getName();
//$audi -> getColor();
echo $audi -> getName()."\n";
echo $audi -> getColor();

?>