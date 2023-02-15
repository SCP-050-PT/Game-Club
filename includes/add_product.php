<?php

require_once 'connect.php';

$title = $_POST['product_title'];
$discription = $_POST['discription'];
$price = $_POST['price'];

$path = 'img/' . $_FILES['image']['name'];
move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);

mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `price`, `discription`, `image`) VALUES (NULL, '$title', '$price', '$discription', '$path')");

header('Location: ../admin.php');

?>