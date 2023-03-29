<?php
session_start();

include_once 'db.php';


$stmt = mysqli_prepare($link, "SELECT * FROM `users` WHERE `email` = ?");
mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
$res = mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

// var_dump($user);
// die();

if ($res){
    if (password_verify($_POST['password'], $user['password'])){
        setLoginStatus($user);
        header('location: /dashboard.php');
    }else{
        echo "Wrong password";
    }
}

function setLoginStatus(array $data){
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['token'] = $data['token'];
    setUserCookie();
}

function setUserCookie(){
    if (isset($_POST["remember"])){
        setcookie(
            'login',
            $_SESSION['token'],
            [
                'expires' => time()+60*60*24*30,
                'SameSite' => 'Lax'
            ]
            );
    }
}

if(getLoginStatus()){
    header('Location: dashboard.php');
    exit;
}
else{
    header('Location: index.php');
    exit;
}

function getLoginStatus(){
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
        return true;
    }
    return false;
}