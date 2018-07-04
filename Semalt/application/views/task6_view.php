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
        <i>Чем отличается оператор == от === ?</i>
    </p>
    <p><h3>Решение</h3>
    <pre>
        Знак "равно" приравнивает типы в JS и затем сравнивает значения, таким образом '0' равно 0;
        Знак "строго равно" не приравнивает типы, а сразу сравнивает значения, так 0 равно 0, но '0' не равно 0;
    </pre>
</header>
<p><a class="Rout" href="/application/views/task7_view.php">СЛЕДУЮЩЕЕ ЗАДАНИЕ</a></p>
</body>
</html>