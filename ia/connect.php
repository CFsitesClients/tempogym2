<?php
require_once 'config.php';
$connect = mysqli_connect($serveur, $login, $password, $db);
mysqli_set_charset($connect, "utf8");

