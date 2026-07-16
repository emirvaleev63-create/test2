<?php
// Получение данных из формы
$name = htmlspecialchars($_POST['name']);
$birthdate = htmlspecialchars($_POST['birthdate']);

// Вычисление возраста
$birthDateTimestamp = strtotime($birthdate);
$currentDate = new DateTime();
$birthDate = new DateTime(date('Y-m-d', $birthDateTimestamp));
$age = $currentDate->diff($birthDate)->y;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Визитка</title>
</head>
<body>
    <h1>Ваша визитка</h1>
    <p><strong>Имя:</strong> <?php echo $name; ?></p>
    <p><strong>Дата рождения:</strong> <?php echo date('d.m.Y', $birthDateTimestamp); ?></p>
    <p><strong>Возраст:</strong> <?php echo $age; ?> лет</p>
</body>
</html>
