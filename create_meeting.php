<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $place = trim($_POST['place'] ?? '');
    $date  = $_POST['date'] ?? '';
    $time  = $_POST['time'] ?? '';

    if ($title === '' || $place === '' || $date === '' || $time === '') {
        echo 'Все поля обязательны';
        exit;
    }

    $_SESSION['meetings'][] = [
        'title' => $title,
        'place' => $place,
        'date'  => $date,
        'time'  => $time,
    ];

    header('Location: room.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание встречи</title>
    
    <form method="post">
    <input type="text" name="title" placeholder="Название встречи" required><br><br>
    <input type="text" name="place" placeholder="Место встречи" required><br><br>
    <input type="date" name="date" required><br><br>
    <input type="time" name="time" required><br><br>

    <button type="submit">Создать</button>
</form>
</head>
<body>

<h1>Создание встречи</h1>


<a href="room.php">← Назад в комнату</a>

</body>
</html>
