<?php
require_once 'config.php';
$connect = mysqli_connect(DB_SERVER,DB_USER,DB_MDP,DB_NAME);
mysqli_set_charset($connect, "utf8");