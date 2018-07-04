<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css<?php echo '?' . time(); ?>" />
</head>
<body>
    <header>
        <p><h3>Реализовать алгоритм  извлечения числовых значений со строки:</h3>
        <p>
            <i>This server has 386 GB RAM and 5000 GB storage</i>
        </p>
        <p><h3>Код Решения</h3>
        <pre>
            let quote = "This server has 386 GB RAM and 5000 GB storage";
            let regex = /\d/g;
            let result = quote.replace(regex, "");
        </pre>
        <p>
        <h3>Результат</h3>
        This server has  GB RAM and  GB storage
    </header>
    <p><a class="Rout" href="/application/views/task3_view.php">СЛЕДУЮЩЕЕ ЗАДАНИЕ</a></p>
</body>
</html>
