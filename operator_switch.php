<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Выбор цвета</title>
</head>
<body>
    <form action="favourite_color.php" method="post">
        <label for="color">Выберите ваш любимый цвет:</label>
        <select id="color" name="color">
            <option value="red">Красный</option>
            <option value="blue">Синий</option>
            <option value="green">Зелёный</option>
            <option value="yellow">Жёлтый</option>
            <option value="purple">Фиолетовый</option>
        </select>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>