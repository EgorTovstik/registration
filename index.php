<!doctype html>

<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="/assets/main.css"
</head>
<body>
    <!--Форма авторизации-->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
    <form action="index.php" method="POST">
        <label>Логин</label>
        <input type="text" placeholder="Введите свой логн" name='login' value="<?php echo $_POST['login'] ?? '' ?>">
        <label>Пароль</label>
        <input type="password" placeholder="Введите свой пароль" name='pswrd' value="<?php echo $_POST['pswrd'] ?? '' ?>">
        <button>Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/registr.php">зарегистрируйтесь!</a>
        </p>
    </form>
        <?php
    }
    ?>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<b>login</b> = ' . ($_POST['login'] ?? '') . '<br>';
            echo 'pswrd = ' . ($_POST['pswrd'] ?? '');
        }
        ?>
    </div>
</body>
</html>