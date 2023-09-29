<?php
    
    require_once 'User.php';
    require_once 'FileUserPersist.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user = new User((string) $_POST['fio'], (string) $_POST['email'], (string) $_POST['login'], (string) $_POST['pswrd'], (string) $_POST['pswrd_confirm']);

        echo $user -> getCreatedAD() -> format('d.m.Y H:i.s') . '<br>';
        echo($user -> isPassworsEquals() ? 'Пароли совпадают' : 'Пароли не совпадают') . '<br>';

        $filePersister = new FileUserPersist();

        $filePersister->save($user);

        header('Location: mylist.php?registranion=success');
        die();
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