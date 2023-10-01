<?php
    session_start();

    if(isset($_GET['action']) && 'logout' === $_GET['action']){
        session_unset();
        header('Location: index.php');
    }
?>
<!doctype html>

<html lang = "en">
<head>

    <meta charset="UTF-8">
    <title>Моя страница</title>
    <link rel="stylesheet" href="/assets/main.css">
</head>

    <body>
        <!--Моя страница-->
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
            if(isset($_SESSION['user'])){
                echo sprintf('Привет, %s', $_SESSION['user']);
            }
        }
        ?>
        <br> <a class="btn btn-success" href="index.php?action=logout">Выход</a>
    </body>
</html>