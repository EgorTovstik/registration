<?php
        require_once 'User.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = new User((string) $_POST['fio'], (string) $_POST['email'], (string) $_POST['login'], (string) $_POST['pswrd'], (string) $_POST['pswrd_confirm']);
            if ($user -> isPassworsEquals()) {
                header('Location: mylist.php');
            } else {
                header('Location: registr.php');
                echo('Пароли не совпали');
                die();
            }
        }
?>


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
    <form action="mylist.php" method="post">
        <label for="fioInput">ФИО</label>
        <input type="text" placeholder="Введите свое ФИО" name="fio" id='fioInput'>
        <label for='MailInput'>Почта</label>
        <input type="email" placeholder="Введите адрес электронной почты" name='email' id='MailInput'>
        <label for="LoginInput">Логин</label>
        <input type="text" placeholder='Введите логин' name='login' id="LoginInput">
        <label for="pswrdInput">Пароль</label>
        <input type="password" placeholder="Введите свой пароль" name='pswrd' id="pswrdInput">
        <label type="pswrdInputCheck">Подтверждение пароля</label>
        <input type="password" placeholder="Подтвердите пароль" name="pswrd_confirm" id="pswrdInputCheck">
        <button>Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/index.php">авторизируйтесь!</a>
        </p>
    </form>
        <?php
    }
    ?>
</body>
</html>

