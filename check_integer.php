<?php
$number1 = $_POST['number1'];

if (is_numeric($number1) && ctype_digit($number1)) {
    echo "Число $number1 - ціле число";
} else {
    echo "Будь ласка, введіть ціле число!";
}
?>