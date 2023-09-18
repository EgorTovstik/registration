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
    <form action="index.php" method="post">
        <label>ФИО</label>
        <input type="text" placeholder="Введите свое ФИО" name='FIO' value="<?php echo $_POST['FIO'] ?? '' ?>">
        <label>Почта</label>
        <input type="email" placeholder="Введите адрес электронной почты" name='email' value="<?php echo $_POST['email'] ?? '' ?>">
        <label>Логин</label>
        <input type="text" placeholder='Введите логин' name='login' value="<?php echo $_POST['login'] ?? '' ?>">
        <label>Пароль</label>
        <input type="password" placeholder="Введите свой пароль" name='pswrd' value="<?php echo $_POST['pswrd'] ?? '' ?>">
        <label>Подтверждение пароля</label>
        <input type="password" placeholder="Подтвердите пароль" name="pswrd" value="<?php echo $_POST['pswrd'] ?? '' ?>">
        <button>Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/index.php">авторизируйтесь!</a>
        </p>
    </form>
        <?php
    }
    ?>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo 'FIO = ' . ($_POST['FIO'] ?? '');
            echo 'email = ' . ($_POST['email'] ?? '');
            echo '<b>login</b> = ' . ($_POST['login'] ?? '') . '<br>';
            echo 'pswrd = ' . ($_POST['pswrd'] ?? '');
        }
        ?>
    </div>
</body>
</html>

