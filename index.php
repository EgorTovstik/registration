<?php
    require_once 'User.php';
    require_once 'FileUserPersist.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        if (isset($_GET['action']) && 'login' === $_GET['action']){
            var_dump($_POST);
            die();
        }
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
    <form action="index.php" method="POST">
        <label for="LoginInput">Логин</label>
        <input type="text" placeholder="Введите свой логн" name='login' id="LoginInput">
        <label for="pswrdInput">Пароль</label>
        <input type="password" placeholder="Введите свой пароль" name='pswrd' id="pswrdInput">
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