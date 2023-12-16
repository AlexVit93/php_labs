<?php

$name = "Vitali";
$surname = "Mayerau";

echo "<br>Разработчик скрипта:". $name ."". $surname ."<br>";

$treug = [];
for ($n = 1; $n <= 10; $n++) {
    $treug[] = $n * ($n + 1) / 2;
}

echo "Треугольные числа: <br>" . implode("  ", $treug) . "\n";

$kvd = [];
for ($i = 1; $i <= 10; $i++) {
    $kvd[] = $i * $i;
}

echo "<br>Квадраты чисел: <br>" . implode("  ", $kvd) . "\n";

$rez = array_merge($treug, $kvd);

echo "<br>Объединенный массив: <br>" . implode("  ", $rez) . "\n";

rsort($rez);

echo "<br>Отсортированный массив в обратном порядке: <br>" . implode("  ", $rez) . "\n";

?>
