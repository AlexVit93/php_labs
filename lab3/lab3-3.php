<?php
$name = "Vitali";
$surname = "Mayerau";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа</title>
</head>
<body>
    <h1>Лабораторная работа по вычислению функции</h1>
    <p>Функция задается следующим образом:</p>
    <img src="./img/option_11.png" alt="Вариант 11">
    <p>Для заданного значения x необходимо вычислить значение y.</p>

    <?php
    function calculate_y($x) {
        if ($x <= -1 || $x === 4) {
            return sqrt(2 * $x - pow($x, 2)) - 1;
        } elseif ($x > 0) {
            return log($x + 3);
        } else {
            return $x / 2;
        }
    }

    $x_value = 2.5;
    $y_value = calculate_y($x_value);

    echo "<p>Для x = $x_value значение функции y = $y_value</p>";
    ?>

    <footer>
        <p>Разработчик скрипта: <?=$name; ?><br><?=$surname; ?></p>
    </footer>
</body>
</html>
