<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css<?php echo '?' . time(); ?>" />
</head>
<body>
<header>
    <p><h3>Нужно поменять 2 переменные местами без использования третьей:</h3>
    <p>
        <i> $а = [1,2,3,4,5]; $b = ‘Hello world’; </i>
    </p>
    <p><h3>Код Решения</h3>
    <pre>
        $a = [1,2,3,4,5];
        $b = "Hello World";

        list($a,$b)=[$b,$a];
        print_r("a = ".$a."\n"."b = ");
        print_r($b);
    </pre>
    <p>
    <h3>Результат</h3>
    a = Hello World
    <p>b = Array</p>
    <p>(</p>
    <p>[0] => 1</p>
    <p>[1] => 2</p>
    <p>[2] => 3</p>
    <p>[3] => 4</p>
    <p>[4] => 5</p>
    <p>)</p>
</header>
<p><a class="Rout" href="/application/views/task6_view.php">СЛЕДУЮЩЕЕ ЗАДАНИЕ</a></p>
</body>
</html>