<?php

//! iterator is a method which works private and protected propertise as public. as it can access anywhere.

class Person{
    public $Name = "Ather";
    public $Age = "25";
    public $Skill = "Web Developer";

    private $Email = "ather01@gmail.com";
    protected $Password = "12345@";

    function iteratorInner(){
        foreach($this as $key => $value){
            echo "<pre>";
            echo "$key => $value";
            echo "</pre>";
        }
    }
}
$person = new Person();
$person -> iteratorInner();


?>