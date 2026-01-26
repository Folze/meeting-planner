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

    <a href="index.php">← Назад</a>

</body>
</html>
