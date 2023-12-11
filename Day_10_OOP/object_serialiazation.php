<?php

class Programming{
    public $html;
    public $css;
    private $php;
    protected $java;

    function __construct()
    {
        $this -> html = "I know Html";
        $this -> css = "I love Css";
        $this -> php = "I am a php developer";
        $this -> java = "I am a java programmer";
    }
}

$pro = new Programming;
// $ser = serialize($pro);
// file_put_contents("programming.txt", $ser);
// echo $ser;
$getFile = file_get_contents("programming.txt");
$unser = unserialize($getFile);
echo "<pre>";
print_r($unser);
echo "</pre>";




?>