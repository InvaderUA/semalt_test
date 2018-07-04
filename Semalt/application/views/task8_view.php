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
        <i>Какие данные пользователя сайта из перечисленных можно считать на 100% достоверными: cookie, данные сессии, IP-адрес пользователя , User-Agent? Почему?
        </i>
    </p>
    <p><h3>Решение</h3>
    <pre>
        Данные сессии и ip-пользователя (несмотря на прокси), потому что их практически невозможно подделать со стороны пользователя, куки, даже при наличии
        контольного хэша считаются небезопасными, user-agent легко подделывается даже браузерами т.к. его значение можно быстро поменять.
    </pre>
    <p>
</header>
<p><a class="Rout" href="/application/views/task9_view.php">СЛЕДУЮЩЕЕ ЗАДАНИЕ</a></p>
</body>
</html>