<?php

session_start();

$login = $_POST['login'];
$pas = $_POST['password'];

if ($login == 'admin' && $pas == 'admin') {

  $_SESSION['admin'] = true;
  header('Location: ../admin.php');

} else

  header('Location: ../authorization.php');

?>