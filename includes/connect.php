<?php
    error_reporting(0);
    $connect = mysqli_connect('localhost1', 'root', '', 'babushkin');

    if (!$connect) {
        die('Error connect to database');
    }

?>