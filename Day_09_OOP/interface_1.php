<?php

/*
interface is equal to class but it has no body part of function and use implements keyword to change extends

*/

interface School{
    public function mySchool();
}
interface College{
    public function myCollege();
}
interface Varsity{
    public function myVarsity();
}

/// First class add
class Teacher implements School, College, Varsity{

    public function __construct()
    {
        $this -> mySchool();
        $this -> myCollege();
        $this -> myVarsity();
    }
    public function mySchool()
    {
        echo "I am a School Teacher.<br>";
    }
    public function myCollege()
    {
        echo "I am a College Teacher.<br>";
    }
    public function myVarsity()
    {
        echo "I am a Varsity Teacher.<br>";
    }
}

/// second class add 
class Student implements School, College, Varsity{

    public function __construct()
    {
        $this -> mySchool();
        $this -> myCollege();
        $this -> myVarsity();
    }
    public function mySchool()
    {
        echo "I am a Student Teacher.<br>";
    }
    public function myCollege()
    {
        echo "I am a Student Teacher.<br>";
    }
    public function myVarsity()
    {
        echo "I am a Student Teacher.";
    }
}

$teacher = new Teacher();
$student = new Student();

?>