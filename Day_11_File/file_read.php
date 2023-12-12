<?php
$fileName = "/xampp/htdocs/php_classes/Day_11_File/doc_1.txt";
if(is_readable($fileName))
{
    $fp = fopen($fileName, "r");
    while( $line = fgets($fp) )
        {
            echo $line;
        }

    // rewind($fp); 
    // while( $line = fgets($fp) )
    //     {
    //         echo $line;
    //     }

    fclose($fp);
    echo "<br/>";

    // array hisabe porar jonno new niom

    $data = file($fileName);
    print_r($data);
}



?>