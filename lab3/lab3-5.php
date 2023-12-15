<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаба 3-5</title>
</head>
<body>
    <h1>Лабораторная работа по формуле для вычисления арктангенса с использованием ряда Тейлора</h1>
    <p>Функция задается следующим образом:</p>
    <img src="./img/task_5.png" alt="Вариант 11">
    <?php

function arth($x, $precision = 0.000001) {
    $n = 0;
    $term = 1 / $x; // Первый член ряда
    $sum = $term; // Сумма ряда

    do {
        $n++;
        $term = $term * (-1) * (1 / $x * $x); // (-1)^n / x^(2n+1)
        $sum += $term / (2 * $n + 1);
    } while (abs($term) > $precision); 

    return $sum;
}


$x = 1.1; // Значение должно быть |x| > 1
echo "Arth($x) = " . arth($x);
?>


</body>
</html>