<?php
class Php{
    public function framework()
    {
        echo "Laravel is a php framework.<br/>";
        return $this; // ! to declare this object for method chaining
    }

    public function cms()
    {
        echo "Wordpress is a best cms.<br/>";
        return $this; // ! to declare this object for method chaining
    }

    public function language()
    {
        echo "Php is a serverside language.";
        return $this; // ! to declare this object for method chaining
    }
}

$php = new Php();
$php -> framework() -> cms() -> language(); // ! it's a method chaining




?>