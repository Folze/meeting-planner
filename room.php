<?php
// room.php

$roomName = $_POST['room_name'];
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

<button>Создать встречу</button>

<p>Встречи появятся здесь</p>

</body>
</html>
