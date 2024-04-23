<?php
$number = $_POST['number'];

if (is_numeric($number)) {
    if ($number % 2 == 0) {
        echo "Число $number - парне";
    } else {
        echo "Число $number - непарне";
    }
} else {
    echo "Будь ласка, введіть число!";
}
?>