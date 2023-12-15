<?php

$name = "Vitali";
$surname = "Mayerau";
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

echo "Исходный массив: ";
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

echo "Измененный массив: ";
foreach ($array as $value) {
    echo $value . " ";
}
echo "\n";

print_r("Разработчик скрипта: <?=$name; ?><br><?=$surname; ?>");
?>
