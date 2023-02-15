<?php

session_start();


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
        <!-- Форма регистрации -->
        <div class="container">
            <div class="form_align">
                <div class="form">
                    <form action="includes/signup.php" method="post">
                        <div class="form_item">
                            <label for="full_name_area">ФИО</label>
                            <input type="text" name="full_name" id="full_name_area" placeholder="Введите полное ФИО" required>
                        </div>
                        <div class="form_item">
                            <label for="login_area">Логин</label>
                            <input type="text" name="login" id="login_area" placeholder="Придумайте логин" required>
                        </div>
                        <div class="form_item">
                            <label for="phone_area">Номер телефона</label>
                            <input type="tel" name="phone" id="phone_area" placeholder="Введите свой номер телефона">
                        </div>
                        <div class="form_item">
                            <label for="email_area">Email</label>
                            <input type="email" name="email" id="email_area" placeholder="Введите свой Email" required>
                        </div>
                        <div class="form_item">
                            <label for="password_area">Пароль</label>
                            <input type="password" name="password" id="password_area" placeholder="Придумайте пароль" required>
                        </div>
                        <div class="form_item">
                            <label for="password_confirm_area"></label>
                            <input type="password" name="password_confirm" id="password_confirm_area" placeholder="Подтвердите пароль" required>
                        </div>

                        <button type="submit">Зарегистрироваться</button>
                        <p>Есть аккаунт? <a href="authorization.php">Авторизоваться</a></p>

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