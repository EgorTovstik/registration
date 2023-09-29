<?php
    
    require_once 'User.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user = new User((string) $_POST['fio'], (string) $_POST['email'], (string) $_POST['login'], (string) $_POST['pswrd'], (string) $_POST['pswrd_confirm']);

    }
    ?>

<!doctype html>

<html lang = "en">
<head>

    <meta charset="UTF-8">
    <title>Моя страница</title>
    <link rel="stylesheet" href="/assets/main.css"
</head>

    <body>
        <!--Моя страница-->

    </body>
</html>