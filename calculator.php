<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

//калькулятор
if (is_numeric($num1) && is_numeric($num2)) {
    echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
    echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
    echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
    echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
    echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";
} else {
    echo "Будь ласка, введіть числа!";
}

//макс число
if (is_numeric($num1) && is_numeric($num2)) {
    if ($num1 > $num2) {
        echo "Більше число: $num1";
    } elseif ($num2 > $num1) {
        echo "Більше число: $num2";
    } else {
        echo "Числа рівні";
    }
} else {
    echo "Будь ласка, введіть числа!";
}
?>