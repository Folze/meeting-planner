<?php
// index.php
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Meeting Planner</title>
</head>
<body>

    <h1>Meeting Planner</h1>

    <form action="room.php" method="post">
        <input 
            type="text" 
            name="room_name" 
            placeholder="Название комнаты"
            required
        >
        <br><br>
        <button type="submit">Создать комнату</button>
    </form>

</body>
</html>
