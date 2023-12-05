<?php

abstract class Student{
    public $name;
    public $age;

    public function details()
    {
        return $this -> name . " is ". $this -> age . " years old <br>";
    }

    abstract public function school();
}

class Boy extends Student{
    public function describe()
    {
        return parent::details();
    }
    public function school(){
        return "I like reading story book";
    }
}
$s = new Boy();
$s -> name = "Kamal";
$s -> age = "15";
echo $s -> describe();
echo $s -> school();


?>