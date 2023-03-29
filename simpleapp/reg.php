<?php

session_start();

include_once 'db.php';
function register(array $data){
    $values = [
        'id' => uniqid($data['email']),
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => password_hash($data['password'], PASSWORD_ARGON2ID),
        'token' => password_hash($data['email'], PASSWORD_ARGON2ID), 
        'date' => (new DateTime()) -> format('Y-m-d H:i:s')
    ];

    return $values;
}

$user = register($_POST);
// var_dump($user);

$stmt = mysqli_prepare($link, "INSERT INTO `users` (`username`,`email`,`password`,`token`, `created`) VALUES (?,?,?,?,?)");
mysqli_stmt_bind_param($stmt, "sssss", $user['username'], $user['email'], $user['password'], $user['token'], $user['date']);

mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($link);

 
setLoginStatus($user);


function setLoginStatus(array $data){

    $token = password_hash($data['email'], PASSWORD_DEFAULT);
    $_SESSION['username'] = $data['username'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['date'] = $data['date'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['token'] = $token;
    $_SESSION['loggedin'] = true;
    storeUserToCookies();
}

function storeUserToCookies(){
    var_dump($_SESSION);
    setcookie(
        'login', $_SESSION['token'],
            [
        'expires' => time()+3600,
        'samesite' => 'Lax'
    ]); 
}