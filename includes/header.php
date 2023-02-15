<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/svg" href="img/icons/icon.svg">
  <link rel="stylesheet" type="text/css" href="css/fonts.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css/slick.css?<?echo time();?>">
  <link rel="stylesheet" type="text/css" href="css/style.css?<?echo time();?>">
  <title>Игровой интернет-магазин Game Club</title>
</head>
<body>
  <header class="header">
    <div class="header_top">
      <div class="container">
        <div class="header_top-inner">
          <nav class="menu">
            <ul class="menu_list">
              <li class="menu_item">
                <a class="menu_link" href="#products">Каталог</a></li>
                <li class="menu_item">
                  <a class="menu_link" href="#categories">Категории</a></li>
                  <li class="menu_item">
                    <a class="menu_link" href="#search">Поиск</a></li>
                  </ul>
                </nav>
                <a class="logo" href="index.php" >
                  <img class="logo_img" src="img/icons/logo-icon.svg" alt="logo" >
                </a>
                <div class="header_box">
                  <a class="header_adress" href="adminauthorization.php">
                    Админ-панель
                  </a>
                  <ul class="user-list">
                    <li class="user-list_item">
                      <a class="user-list_link" href="authorization.php">
                        <img src="img/icons/login-icon.svg" alt="login">
                      </a>
                    </li>
                    <li class="user-list_item">
                      <a class="user-list_link" href="registration.php">
                        <img src="img/icons/register-icon.svg" alt="register">
                      </a>
                    </li>
                    <li class="user-list_item">
                      <a class="user-list_link basket" href="#">
                        <img src="img/icons/basket-icon.svg " alt="basket">
                        <p class="basket_num">1</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="header_bottom">
            <div class="container">
              <div class="header_bottom-inner">
                <ul class="menu-categories">
                  <li class="menu-categories_item"><a href="#product-tab-1" class="menu-categories_link">Мыши</a></li>
                  <li class="menu-categories_item"><a href="#product-tab-2" class="menu-categories_link">Клавиатуры</a></li>
                  <li class="menu-categories_item"><a href="#product-tab-3" class="menu-categories_link">Наушники</a></li>
                  <li class="menu-categories_item"><a href="#product-tab-4" class="menu-categories_link">Кресла</a></li>
                  <li class="menu-categories_item"><a href="#product-tab-5" class="menu-categories_link">Cтолы</a></li>
                  <li class="menu-categories_item"><a href="#product-tab-6" class="menu-categories_link">Коврики для мыши</a></li>
                </ul>
              </div>
            </div>
          </div>
        </header>