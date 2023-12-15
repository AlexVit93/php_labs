<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вычисление функции b</title>
</head>
<body>
    <h2>Задание на лабораторную работу</h2>
    <p>Вычислить значение функции b = cos^2(z) + lg|2x + y|.</p>
    <p><img src="./img/Screenshot_2.png" alt="Функция b"></p>
    
    <?php
    function calculate_b($x, $y, $z) {
        return pow(cos($z), 2) + log10(abs(2 * $x + $y));
    }


    $x = isset($_GET['x']) ? floatval($_GET['x']) : 0;
    $y = isset($_GET['y']) ? floatval($_GET['y']) : 0;
    $z = isset($_GET['z']) ? floatval($_GET['z']) : 0;

 
    $b = calculate_b($x, $y, $z);
    echo "<p>Для x = $x, y = $y и z = $z, значение функции b = $b.</p>";
    ?>

    <footer>
        <p>Разработчик скрипта: Ваше Имя</p>
    </footer>
</body>
</html>
