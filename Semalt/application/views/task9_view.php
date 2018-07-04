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
        <pre><i>Что выведет следующий код на JavaScript и почему:
            for( var i = 0; i < 10; i++){
            setTimeout(function ()
            {
            console.log(i);
            }, 100);
}
</i></pre>
    <p><h3>Код Решения</h3>
    <pre>
        Консоль выведет число 10 с новой строки в течении 10 итераций.
        10 получается из за того, что лог отрабатывает после таймаута, когда выполнение итераций цикла завершено.
    </pre>
    <p>
    <p><a class="Rout" href="/application/views/template_view.php">НА ГЛАВНУЮ</a></p>
</header>
</body>
</html>