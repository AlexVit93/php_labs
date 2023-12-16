<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаба6-2</title>
</head>
<body>
<?php
# Вариант 11
$name = "Vitali";
$surname = "Mayerau";

$text = 'Арбуз прекрасен, бурый медведь ходит по лесу.';

function removeLastLetter($word) {
    return mb_substr($word, 0, mb_strlen($word) - 1);
}

$words = explode(' ', $text);
$wordCount = 0;

foreach ($words as $index => $word) {
    // Удаляем знаки препинания для чистоты проверки
    $cleanWord = str_replace([',', '.'], '', $word); 
    // Проверяем, что слово длиннее одного символа и вторая буква 'р'
    if (mb_strlen($cleanWord) > 1 && mb_substr($cleanWord, 1, 1) == 'р') {
        $wordCount++;
    }
    // Удаляем последнюю букву
    $words[$index] = removeLastLetter($cleanWord); 
}

echo "<br>Количество слов, где вторая буква 'р': " . $wordCount . "\n";
echo "<br>Слова без последней буквы: " . implode(' ', $words) . "\n";

echo "<br>Разработчик скрипта: " . $name . " " . $surname;
?>
    
</body>
</html>
