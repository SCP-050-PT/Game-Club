<?php

session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg" href="img/icons/icon.svg">
  <link rel="stylesheet" type="text/css" href="css/fonts.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css/slick.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css/style.css?<?echo time();?>">
  <title>Игровой интернет-магазин Game Club</title>
</head>

<body>
    <header>
        <div class="registration_logo">
            <a href="index.php"><img class="logo_img" src="img/icons/logo-icon.svg" alt="logo"></a>
        </div>
    </header>

    <body>
        <!-- Форма авторизации -->
        <div class="container">
            <div class="form_align">
                <div class="form">
                    <form action="includes/signin.php" method="post">
                        <div class="form_item">
                            <label for="login_area">Логин</label>
                            <input type="text" name="login" id="login_area" placeholder="Введите логин" required>
                        </div>
                        <div class="form_item">

                            <div class="form_item">
                                <label for="password_area">Пароль</label>
                                <input type="password" name="password" id="password_area" placeholder="Введите пароль" required>
                            </div>
                            <button type="submit">Войти</button>
                            <p>Нет аккаунта? <a href="registration.php">Зарегистрироваться</a></p>
                            <p class="msg">
                                <?php
                                if (isset($_SESSION["message"])) {


                                    echo $_SESSION["message"];
                                    unset($_SESSION["message"]);
                                }
                                ?>
                            </p>
                    </form>
                </div>
            </div>
        </div>

    </body>

</html>