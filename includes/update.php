<?php

require_once 'connect.php';

$id = $_POST['id'];
$title = $_POST['product_title'];
$author = $_POST['author'];
$discription = $_POST['discription'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `discription` = '$discription' WHERE `products`.`id` = '$id'");

header('Location: ../admin.php');

?>