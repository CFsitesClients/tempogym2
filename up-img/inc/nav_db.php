<?php
require_once 'connect.php';
$sql_nav="SELECT `id`, `lintitule`, `ladesc` FROM `tgj_photos_cat`";
$req_nav=mysqli_query($connect, $sql_nav)or die(mysqli_error($connect));
