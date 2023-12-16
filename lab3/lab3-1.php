<?php
$name = "Vitali";
$surname = "Mayerau";

echo"". $name ."". $surname ."<br>";

$lang = 'ru';

if ($lang == 'ru') {
    echo 'русский';
} elseif ($lang == 'en') {
    echo 'английский';
} elseif ($lang == 'fr') {
    echo 'французский';
} elseif ($lang == 'de') {
    echo 'немецкий';
} else {
    echo 'Язык неизвестен';
}
?>