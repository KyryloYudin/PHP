<?php
$number2 = isset($_POST['number2']) ? $_POST['number2'] : '';

if (!is_numeric($number2)) {
    echo "Будь ласка, введіть число!";
} else {
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr" . (($i == $number2) ? " class='highlight'" : "") . ">";
        echo "<td>" . $number2 . " x " . $i . " = " . ($number2 * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>