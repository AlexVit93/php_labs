<?php
$name = "Vitali";
$surname = "Mayerau";

echo"". $name ."". $surname ."<br>";

define('X_VALUE', 10); 
define('Y_VALUE', 16); 
define('Z_VALUE', 20); 

    
$b = cos(Z_VALUE) ** 2 + log10(2 * X_VALUE) + abs(Y_VALUE);


echo "<html><head><title>Результат лабораторной работы</title></head><body>";
echo "<h1>Лабораторная работа по математическим выражениям</h1>";
echo "<p>Этот скрипт вычисляет значение выражения b = cos<sup>2</sup>z + lg(2x) + |y|</p>";
echo "<img src='путь к изображению/Скриншот_1.png' alt='Математическое выражение'>";
echo "<p>Значение b равно: " . $b . "</p>";
echo "</body></html>";
?>