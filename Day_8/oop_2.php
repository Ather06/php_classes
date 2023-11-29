<?php

class Team{
    // properties apply
    
    public $name;

    //methods apply

    function setName($name){
        $this -> name = $name;
    }
    function getName(){
        return $this -> name;
    }
}

$rahim = new Team();
$karim = new Team();
$akram = new Team();
$rahim -> setName('Rahim');
$karim -> setName('Kaarim');
$akram -> setName('Akram');

echo $rahim -> getName()."\n";
echo $karim -> getName()."\n";
echo $akram -> getName();



?>