<?php

function factorial( int $n) /* type_hint */ {
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}