<?php

trait Java{
    public function javaCoder()
    {
        return "I love Java.<br/>";
    } 
}

class CoderOne{
    use Java;
    public function javaCoder()
        {
            return "I love Java & Php";
        } 
}

$c1 = new CoderOne;
echo $c1 -> javaCoder();

?>