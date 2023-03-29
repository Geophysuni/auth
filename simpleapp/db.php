<?php

$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = '1234';
$db_name = 'app_db';
$db_port = 3306;

$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
    exit();
}

$query = "SELECT*FROM `users`";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
if (!$result){
    echo "Errors occured ".mysqli_error($link);
} 