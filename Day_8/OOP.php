<?php 

class car{
    public $name;

    function set_name($name){
        $this -> name = $name;
    }
    function get_name(){
        echo $this -> name ."\n";
    }
}
$BMW = new car();
$AUDI = new car();
$BMW -> set_name("BMW");
$AUDI -> set_name("AUDI");

$BMW -> get_name();
$AUDI -> get_name();

?>