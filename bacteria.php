<!DOCTYPE html>
<html>
<head>
    <title>Задача про бактерії</title>
</head>
<body>

<h2>Задача про бактерії</h2>

<form action="" method="post">
    <label for="start">Введіть початкову кількість бактерій:</label><br>
    <input type="text" id="start" name="start"><br><br>
    <label for="end">Введіть кінцеву кількість бактерій:</label><br>
    <input type="text" id="end" name="end"><br><br>
    <input type="submit" value="Обчислити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = isset($_POST['start']) ? (int)$_POST['start'] : '';
    $end = isset($_POST['end']) ? (int)$_POST['end'] : '';

    if (!is_numeric($start) || !is_numeric($end)) {
        echo "Будь ласка, введіть числа!";
    } elseif ($start <= 0 || $end <= 0) {
        echo "Кількість бактерій повинна бути більше нуля!";
    } elseif ($start >= $end) {
        echo "Кінцева кількість бактерій повинна бути більшою за початкову!";
    } else {
        $hours = 0;
        $bacteria = $start;

        while ($bacteria < $end) {
            $hours++;
            $bacteria *= 2;
            echo "Минуло $hours год. - маємо $bacteria бактерій<br>";
        }
    }
}
?>

</body>
</html>
