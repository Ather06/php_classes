<?php
$fileName = "/xampp/htdocs/php_classes/Day_11_File/doc_2.txt";
$fp = fopen($fileName, "w");
fwrite($fp, "January");
fwrite($fp, "Febuary");
fclose($fp);






?>