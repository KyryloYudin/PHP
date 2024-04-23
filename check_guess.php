<!DOCTYPE html>
<html>
<head>
    <title>Вгадай число</title>
</head>
<body>

<?php
$number = isset($_POST['number']) ? $_POST['number'] : rand(1, 10);
$guess = isset($_POST['guess']) ? $_POST['guess'] : '';

if (isset($_POST['submit'])) {
    if (is_numeric($guess)) {
        if ($guess == $number) {
            echo '<h2 style="color:red;">ПРАВИЛЬНО!</h2>';
        } elseif ($guess < $number) {
            echo "Загадане число більше<br>";
            echo "Спробуйте ще раз!";
        } else {
            echo "Загадане число менше<br>";
            echo "Спробуйте ще раз!";
        }
    } else {
        echo "Будь ласка, введіть число!";
    }
}
?>

<h2>Вгадай число</h2>

<form action="" method="post">
    <label for="guess">Введіть число від 1 до 10:</label><br>
    <input type="text" id="guess" name="guess"><br><br>
    <input type="submit" name="submit" value="Відгадати">
    <input type="hidden" name="number" value="<?php echo $number; ?>">
</form>

</body>
</html>