<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Дни недели</title>
</head>
<body>
    <?php
    function WeekDay($size, $day, $color) {
        echo "<p style='font-size: {$size}em; color: {$color};'>{$day}</p>";
    }

    $size = 7;

    WeekDay($size--, 'ПОНЕДЕЛЬНИК', 'red');
    WeekDay($size--, 'ВТОРНИК', 'orange');
    WeekDay($size--, 'СРЕДА', 'yellow');
    WeekDay($size--, 'ЧЕТВЕРГ', 'green');
    WeekDay($size--, 'ПЯТНИЦА', 'blue');
    WeekDay($size--, 'СУББОТА', 'indigo');
    WeekDay($size, 'ВОСКРЕСЕНЬЕ', 'violet');
    ?>
</body>
</html>
