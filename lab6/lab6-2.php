<?php
# Вариант 11
$name = "Vitali";
$surname = "Mayerau";

$text = 'Арбуз прекрасен, бурый медведь ходит по лесу.';

function removeLastLetter($word) {
    return substr($word, 0, strlen($word) - 1);
}

# Разбиваем текст на слова
$words = explode(' ', $text);
$wordCount = 0;

# Проверяем вторую букву и удаляем последнюю букву каждого слова
foreach ($words as $index => $word) {
    $word = str_replace([',', '.'], '', $word); 
    if (strlen($word) > 1 && substr($word, 1, 1) == 'р') {
        $wordCount++;
    }
    $words[$index] = removeLastLetter($word);
}

echo "Количество слов, где вторая буква 'р': " . $wordCount . "\n";
echo "Слова без последней буквы: " . implode(' ', $words) . "\n";


echo "Разработчик скрипта: " . $name . "<br>" . $surname;
?>
