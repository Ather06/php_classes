<?php
// write  a class to access a person with name and age
class Person{
    // properties declare
    public $name;
    public $age;
    public $gender;

    // methods declare
    function __construct($name, $age, $gender){
        $this -> name   = $name;
        $this -> age    = $age;
        $this -> gender = $gender;
    }
    
    function getName(){
        return $this -> name;
    }
    function getAge(){
        return $this -> age;
    }
    function getGender(){
        return $this -> gender;
    }
}

$person1 = new Person( 'Rahim', 20, "Male" );
$person2 = new Person ( 'Dolly', 25, 'Female' );
echo $person1 -> getName()."\n";
echo $person1 -> getAge()."\n";
echo $person1 -> getGender()."\n";
echo $person2 -> getName()."\n";
echo $person2 -> getAge()."\n";
echo $person2 -> getGender()."\n";




?>