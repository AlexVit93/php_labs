<?php
$name = "Vitali";
$surname = "Mayerau";

echo "". $name ."". $surname ."<br>";

define('NUM_E', 2.71828);


echo 'Число e равно ' . NUM_E . "\n";


$num_e1 = NUM_E;
echo gettype($num_e1) . "\n"; 

$num_e1 = (string)$num_e1;
echo gettype($num_e1) . ' ' . $num_e1 . "\n"; 

$num_e1 = (int)$num_e1;
echo gettype($num_e1) . ' ' . $num_e1 . "\n"; 

$num_e1 = (bool)$num_e1;
echo gettype($num_e1) . ' ' . $num_e1 . "\n"; 

?>
