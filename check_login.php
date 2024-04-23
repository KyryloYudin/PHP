<?php
$login = $_POST['login'];
$password = $_POST['password'];

$users = array(
    "log1" => array("password" => "pass1", "name" => "Рамський Петре Івановичу"),
    "log2" => array("password" => "pass2", "name" => "Петров Петро Петровичу"),
    "log3" => array("password" => "pass3", "name" => "Іванов Іван Івановичу"),
    "log4" => array("password" => "pass4", "name" => "Сидоров Сидор Сидоровичу")
);

if (array_key_exists($login, $users)) {
    if ($password === $users[$login]["password"]) {
        echo "Доброго дня, " . $users[$login]["name"];
    } else {
        echo "Неправильний пароль для користувача з логіном $login";
    }
} else {
    echo "У нас не зареєстровані користувачі з таким логіном!";
}
?>