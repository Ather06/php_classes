<?php
// interface declare
interface Animal{
    public function makeSound();
}

//class declare
class Cat implements Animal{
    public function makeSound()
    {
        echo "Mew.<br>";
    }
}
class Dog implements Animal{
    public function makeSound()
    {
        echo "Bark.<br>";
    }
}
class Mouse implements Animal{
    public function makeSound()
    {
        echo "Squeak";
    }
}

// object create
$cat   = new Cat();
$dog   = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal){
    $animal -> makeSound();
}

?>