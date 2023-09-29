<!doctype html>

<html lang = "en">
<head>

    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="/assets/main.css"
</head>

<body>
    <!--Форма Регистрации-->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
    <?php
    }
    ?>
<div>
    <?php
    require_once 'User.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user = new User((string) $_POST['FIO'], (string) $_POST['email'], (string) $_POST['login'], (string) $_POST['pswrd'], (string) $_POST['pswrd_confirm']);

        echo $user -> getCreatedAD() -> format('d.m.Y H:i.s') . '<br>';
        echo($user -> isPassworsEquals() ? 'Пароли совпадают' : 'Пароли не совпадают');
    }
    ?>
</div>