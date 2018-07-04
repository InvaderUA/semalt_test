<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css<?php echo '?' . time(); ?>" />
</head>
<body>
<header>
    <p><h3>Условие задания</h3>
    <p>
        <i>Чем отличается require от include ?</i>
    </p>
    <p><h3>Решение</h3>
    <pre>
        Отличие include от require отличается в том, что require падает в Fatal error при невозможности подключения
        файла по любой причине. Include выдает Warning и продолжает работу.
        </pre>
    <p>
</header>
<p><a class="Rout" href="/application/views/task8_view.php">СЛЕДУЮЩЕЕ ЗАДАНИЕ</a></p>
</body>
</html>