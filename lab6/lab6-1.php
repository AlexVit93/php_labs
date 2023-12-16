<?php
# Вариант 11
$name = "Vitali";
$surname = "Mayerau";

echo "<br>Разработчик скрипта:". $name ."". $surname ."<br>";


$string = 'A+BBB-AB+A--B+BAA+B-AB';

# Вставляем пробел после каждого символа 'A'
$stringWithSpaces = str_replace('A', 'A ', $string);

# Подсчитываем количество символов 'B', стоящих между '+' и '-'
$pattern = '/\\+(.*?)\\-/';
preg_match_all($pattern, $stringWithSpaces, $matches);
$countB = 0;
foreach ($matches[1] as $match) {
    $countB += substr_count($match, 'B');
}


echo "<br>Строка с пробелами после 'A': <br>" . $stringWithSpaces . "\n";
echo "<br>Количество символов 'B' между '+' и '-': <br>" . $countB . "\n";


?>
