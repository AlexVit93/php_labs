<?php
$name = "Vitali";
$surname = "Mayerau";
echo "". $name ."". $surname ."<br>";

// $breakfast = "gamburger";
// $$breakfast = "and tea";

// echo"$breakfast \n $gamburger \n";
// echo "$breakfast \n"; echo "$$breakfast \n";

// echo $breakfast; echo $$breakfast;

$breakfast = "gamburger";
$$breakfast = "and tea";

echo $breakfast . "<br>";
echo $gamburger . "<br>";
echo $breakfast . "<br>"; 
echo $$breakfast . "<br>";

// ### (а) `echo "$breakfast $gamburger";`
// - **Что будет выведено:** Здесь будут выведены значения переменных `$breakfast` и `$gamburger`. Поскольку `$breakfast` имеет значение `"gamburger"`, и `$$breakfast` означает переменную, имя которой содержится в `$breakfast`, то есть `$gamburger`, которая имеет значение `"and tea"`, будет выведено `"gamburger and tea"`.
// - **Почему:** В PHP, когда вы используете двойные кавычки, переменные внутри строки интерпретируются и выводят их значения. `$$breakfast` - это переменная переменной, она указывает на переменную с именем, содержащимся в `$breakfast`, т.е. на `$gamburger`.

// ### (б) `echo "$breakfast"; echo "$$breakfast";`
// - **Что будет выведено:** Сначала будет выведено значение `$breakfast`, то есть `"gamburger"`, затем значение `$$breakfast`, что эквивалентно `$gamburger` и будет `"and tea"`.
// - **Почему:** В первом `echo` просто выводится значение переменной `$breakfast`. Во втором `echo`, `$$breakfast` интерпретируется как переменная, имя которой находится в `$breakfast`, т.е. `$gamburger`.

// ### (в) `echo $breakfast; echo $$breakfast;`
// - **Что будет выведено:** Так же, как и в предыдущем случае, сначала будет выведено значение переменной `$breakfast`, то есть `"gamburger"`, затем значение переменной `$$breakfast`, то есть `"and tea"`.
// - **Почему:** В отличие от предыдущего примера, здесь не используются кавычки, но результат остается тем же, поскольку PHP интерпретирует `$$breakfast` как переменную, имя которой содержится в `$breakfast`.

// В обоих случаях (б) и (в) результаты идентичны, так как PHP интерпретирует переменные в строках, а также в прямом вызове `echo`.

$breakfast2 = &$breakfast; 
$color1 = "blue"; 
$color2 = "red";  


echo "<span style='color: $color1;\n'>\n $breakfast2 \n</span><br>\n";


$breakfast = "pizza";


echo "<span style='color: $color2;\n'>\n $breakfast2</span><br>\n";
?>

<!-- Переменная $breakfast2 как ссылка на $breakfast: Переменная $breakfast2 создается как ссылка на переменную $breakfast. Это означает, что обе переменные ссылаются на одно и то же значение в памяти. Любые изменения, внесенные в $breakfast, будут отражаться в $breakfast2.

Отображение значения $breakfast2 до и после изменения $breakfast: Изначально $breakfast2 отображается синим цветом ($color1) и имеет значение "gamburger" (значение $breakfast в этот момент). После того как $breakfast меняется на "pizza", $breakfast2 автоматически обновляется, поскольку она является ссылкой на $breakfast. Теперь $breakfast2 отображается красным цветом ($color2) и имеет значение "pizza".

Это демонстрирует, как работают ссылки в PHP: переменные-ссылки всегда отражают текущее значение переменной, на которую они ссылаются. -->