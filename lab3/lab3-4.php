<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица треугольных чисел</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        .triangle-number {
            color: red;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $number = 1;
            for ($row = 1; $row <= 10; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= 10; $col++) {
                    $isTriangle = false;
                    for ($n = 1; $n * ($n + 1) / 2 <= $number; $n++) {
                        if ($n * ($n + 1) / 2 == $number) {
                            $isTriangle = true;
                            break;
                        }
                    }
                    $class = $isTriangle ? "triangle-number" : "";
                    echo "<td class='$class'>$number</td>";
                    $number++;
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
