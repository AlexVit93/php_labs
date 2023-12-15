<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab4-1</title>
</head>
<body>
<?php
function Ru($color) {
    echo "<p style='color: $color;'>Здравствуйте!</p>";
}

function En($color) {
    echo "<p style='color: $color;'>Hello!</p>";
}

function Fr($color) {
    echo "<p style='color: $color;'>Bonjour!</p>";
}

function De($color) {
    echo "<p style='color: $color;'>Guten Tag!</p>";
}


$lang = $_GET['lang'] ?? 'En'; 
$color = $_GET['color'] ?? 'black'; 


$langFunction = $lang;


if(function_exists($langFunction)) {
    $langFunction($color);
} else {
    echo "<p style='color: red;'>Функция не определена!</p>";
}
?>
</body>
</html>
