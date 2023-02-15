<?php

    session_start();
    
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $password = md5($password);
        
        mysqli_query($connect, "INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`, `phone`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$phone')");
        $_SESSION["message"] = 'Регистрация прошла успешно!';
        header('Location: ../authorization.php');

    } else {
        $_SESSION["message"] = 'Пароли не совпадают';
        header('Location: ../registration.php');
    }
?>