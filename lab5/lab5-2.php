<?php

$name = "Vitali";
$surname = "Mayerau";

echo "<br>Разработчик скрипта:". $name ."". $surname ."<br>";

function customRand($min, $max) {
    return mt_rand($min, $max);
}

function arrayLength($array) {
    $length = 0;
    foreach ($array as $element) {
        $length++;
    }
    return $length;
}

$array = [];
for ($i = 0; $i < 15; $i++) {
    $array[$i] = customRand(1, 100); 
}

echo "<br>Исходный массив: <br>";
foreach ($array as $value) {
    echo $value . " ";
}
echo "\n";

$minIndex = 0;
$length = arrayLength($array); 
for ($i = 1; $i < $length; $i++) {
    if ($array[$i] < $array[$minIndex]) {
        $minIndex = $i;
    }
}

$swapIndex = 5;

$temp = $array[$minIndex];
$array[$minIndex] = $array[$swapIndex];
$array[$swapIndex] = $temp;

echo "<br>Измененный массив: <br>";
foreach ($array as $value) {
    echo $value . " ";
}
echo "\n";

?>
