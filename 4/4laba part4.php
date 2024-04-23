<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $action = $_POST['action'];

    if ($action == "Вхід") {
        if (file_exists("$login.txt")) {
            $file_password = file_get_contents("$login.txt");

            if ($password == trim($file_password)) {
                $_SESSION['login'] = $login;
                echo "Доброго дня, $login!";
            } else {
                echo "Пароль не правильний!";
            }
        } else {
            echo "Такий користувач не зареєстрований!";
        }
    }
    elseif ($action == "Реєстрація") {
        if (file_exists("$login.txt")) {
            echo "Користувач з таким логіном вже зареєстрований! Спробуйте інший логін.";
        } else {
            file_put_contents("$login.txt", $password);
            echo "Вітаємо, $login! Ви успішно зареєстровані!";
        }
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Авторизація / Реєстрація</title>
    </head>

    <body>

    <h1>Авторизація / Реєстрація</h1>

    <form action="" method="post">
        <label for="login">Логін:</label><br>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name="action" value="Вхід">
        <input type="submit" name="action" value="Реєстрація">
    </form>

    </body>

    </html>
<?php
