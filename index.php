<?php

    require_once 'User.php';
    require_once 'FileUserPersist.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $filePersist = new FileUserPersist();

        // var_dump($_POST);
        $user = $filePersist->get($_POST['login']);
        $pswrd = $filePersist->get($_POST['pswrd']);


        if(!$user){
            header('Location: index.php?error=userNotFound');
            die();
        }

        if(!$pswrd){
            header('Location: index.php?error=userNotFound');
            die();
        }

        if($user->getPswrd() === sha1($_POST['pswrd'])){
            session_start();

            $_SESSION['user'] = $user->getLogin();
        }
        
        header('Location: mylist.php');

        die();
    }
?>

<!doctype html>

<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="/assets/main.css">
</head>
<body>
    <!--Форма авторизации-->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
    <form action="" method="POST">
        <label for="LoginInput">Логин</label>
        <input type="text" placeholder="Введите свой логн" name='login' id="LoginInput">
        <label for="pswrdInput">Пароль</label>
        <input type="password" placeholder="Введите свой пароль" name='pswrd' id="pswrdInput">
        <div class="error">
            <?php
                if(isset($_GET['error']) && 'userNotFound' === $_GET['error']){
                    echo 'Некоректный логин или пароль';
                }
            ?>
        </div>
        <button>Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/registr.php">зарегистрируйтесь!</a>
        </p>
    </form>
        <?php
    }
    ?>
</body>
</html>