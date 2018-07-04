<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css<?php echo '?' . time(); ?>" />
</head>
<body>
    <header>
        <p><h3>Написать алгоритм решения задачи:</h3>
        <p>
            <i>В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе
                занимаются спортом и сколько всего учеников в классе?</i>
        </p>
        <p><h3>Код Решения</h3>
        <pre>
            var students = 28;
            var sporties_percent = 75;

            const result = (stud, percent) => ['all students= ' + stud, "sport students= " + stud * (percent / 100)];
        </pre>
        <p>
            <h3>Результат</h3>
            всего студентов = 28, спортсменов = 21;
    </header>
    <p><a class="Rout" href="/application/views/task2_view.php">СЛЕДУЮЩЕЕ ЗАДАНИЕ</a></p>
</body>
</html>

