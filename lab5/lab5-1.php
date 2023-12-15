<?php

$name = "Vitali";
$surname = "Mayerau";

$treug = [];
for ($n = 1; $n <= 10; $n++) {
    $treug[] = $n * ($n + 1) / 2;
}

echo "Треугольные числа: " . implode("  ", $treug) . "\n";

$kvd = [];
for ($i = 1; $i <= 10; $i++) {
    $kvd[] = $i * $i;
}

echo "Квадраты чисел: " . implode("  ", $kvd) . "\n";

$rez = array_merge($treug, $kvd);

echo "Объединенный массив: " . implode("  ", $rez) . "\n";

rsort($rez);

echo "Отсортированный массив в обратном порядке: " . implode("  ", $rez) . "\n";


print_r("Разработчик скрипта: <?=$name; ?><br><?=$surname; ?>");
?>
