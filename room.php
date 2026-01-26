<?php
// room.php
session_start();

if (isset($_POST['room_name'])) {
    $_SESSION['room_name'] = trim($_POST['room_name']);
}

$roomName = $_SESSION['room_name'] ?? 'Без названия';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Комната: <?= htmlspecialchars($roomName) ?></title>
</head>
<body>

    <h1>Комната: <?= htmlspecialchars($roomName) ?></h1>

    <p>Здесь будут участники и встречи</p>
    <p>Участники появятся здесь</p>
    <a href="index.php">← Назад</a>

    <hr>

<h2>Встречи</h2>

<a href="create_meeting.php">Создать встречу</a>

<p>Встречи появятся здесь</p>

</body>
</html>
