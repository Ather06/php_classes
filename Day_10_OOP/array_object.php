<?php
// ! exp-01
$arr = array("Java", "Php", "JavaScript", "C#");
$lang = new ArrayObject($arr);
$lang -> append("Python");
$iterator = $lang -> getIterator();
while($iterator -> valid()){
    echo $iterator -> current(). "<br/>";
    $iterator -> next()."<br/>";
}


// ! exp-02
$allFramework = array("Laravel", "Nextjs", "Django", "Codeigniter");
$framework = new ArrayObject($allFramework);
$frame = $framework -> getIterator();
while($frame -> valid()){
    echo $frame -> current(). "<br/>";
    $frame -> next();
}






?>