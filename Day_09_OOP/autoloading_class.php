<?php
// include "classes/Java.php";
// include "classes/Php.php";
// include "classes/Ruby.php";

spl_autoload_register(function($class_name)
    {
        include "classes/".$class_name.".php";
    }
);


$java = new Java();
$ruby = new Ruby();
$php = new Php();

?>