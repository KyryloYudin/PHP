<?php
$numbers = [4, 2, 5, 3, 6];

foreach ($numbers as $number) {
    $square = $number * $number;
    echo "$number^2 = $square<br>";
}

$countries = array(
    "Україна" => array("Населення" => 42000000, "Столиця" => "Київ"),
    "Сполучені Штати Америки" => array("Населення" => 328000000, "Столиця" => "Вашингтон"),
    "Китай" => array("Населення" => 1398000000, "Столиця" => "Пекін"),
    "Бразилія" => array("Населення" => 212000000, "Столиця" => "Бразиліа"),
    "Індія" => array("Населення" => 1353000000, "Столиця" => "Нью-Делі")
);

echo "<h2>Таблиця 3x2</h2>";
echo "<table border='1'>";
foreach ($countries as $country => $data) {
    echo "<tr>";
    echo "<td>$country</td>";
    echo "<td>{$data['Населення']}</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Столиця</td>";
    echo "<td>{$data['Столиця']}</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h2>Таблиця 2x3</h2>";
echo "<table border='1'>";
echo "<tr>";
foreach ($countries as $country => $data) {
    echo "<td>$country</td>";
}
echo "</tr>";
echo "<tr>";
foreach ($countries as $country => $data) {
    echo "<td>{$data['Населення']}</td>";
}
echo "</tr>";
echo "<tr>";
foreach ($countries as $country => $data) {
    echo "<td>{$data['Столиця']}</td>";
}
echo "</tr>";
echo "</table>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма введення даних</title>
</head>
<body>

<h2>Форма введення даних</h2>

<form action="" method="post">
    <label for="surname">Прізвище:</label><br>
    <input type="text" id="surname" name="surname" required><br><br>
    <label for="name">Ім'я:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="age">Вік:</label><br>
    <input type="number" id="age" name="age" required><br><br>
    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="Готово">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    if (empty($surname) || empty($name) || empty($age) || empty($email)) {
        echo "<p style='color:red;'>Будь ласка, заповніть всі поля форми!</p>";
    } else {
        $data = array(
            "Прізвище" => $surname,
            "Ім'я" => $name,
            "Вік" => $age,
            "E-mail" => $email
        );

        echo "<h2>Введені дані:</h2>";
        echo "<table border='1'>";
        foreach ($data as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

</body>
</html>

<?php

$firstArray = array();
$secondArray = array();

for ($i = 1; $i <= 10; $i++) {
    $first = pow($i, 2);
    $second = pow($i, 3);
    $firstArray[] = $first;
    $secondArray[] = $second;
}

$resultArray = array_merge($firstArray, $secondArray);

foreach ($resultArray as $number) {
    echo "$number ";
}

?>
