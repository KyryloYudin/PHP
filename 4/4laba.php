<!DOCTYPE html>
<html>
<head>
    <title>Перевірка наявності файлу</title>
</head>
<body>

<h2>Перевірка наявності файлу</h2>

<form action="" method="post">
    <label for="filename">Ім'я файлу:</label><br>
    <input type="text" id="filename" name="filename" required><br><br>
    <input type="submit" value="Готово">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST['filename'];

    if (file_exists($filename)) {
        echo "<h3>Файл існує!</h3>";
        echo "<p><strong>Розмір:</strong> " . filesize($filename) . " байт</p>";
        echo "<p><strong>Час створення:</strong> " . date("F d Y H:i:s.", filectime($filename)) . "</p>";
        echo "<p><strong>Час останньої модифікації:</strong> " . date("F d Y H:i:s.", filemtime($filename)) . "</p>";
        echo "<h4>Вміст файлу:</h4>";
        echo "<pre>";
        echo htmlspecialchars(file_get_contents($filename));
        echo "</pre>";
    } else {
        echo "<h3>Файл з іменем $filename у поточному каталозі не існує</h3>";
    }
}
?>


</body>
</html>
<?php
echo "<h1>Завдання 2</h1>";

$lines = file('tags.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$count = count($lines) / 2;

echo '<table border="2">';
for ($i = 0; $i < count($lines); $i += 2) {
    echo '<tr>';
    echo "<td>" . $lines[$i] . "</td>";
    echo "<td>" . $lines[$i + 1] . "</td>";
    echo '</tr>';
}
echo '</table>';
echo "Всього у файлі описано тегів: $count<br><br>";
?>

