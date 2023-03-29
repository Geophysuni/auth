<?php
session_start();
include_once 'db.php';

$cookie = $_COOKIE;

$stmt = mysqli_prepare($link, "SELECT * FROM `users` WHERE `token` = ?");
mysqli_stmt_bind_param($stmt, "s", $cookie);
$res = mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($res){
    // header('location: /dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" >
</head>
<body>
    <header> 
        <nav></nav>
    </header>
    
    <main>
        <div class="container">
        <section>
            <form action="reg.php" method = "post" class="action">
                <legend>
                    <h3>Register</h3>
                </legend>
                <label for="username"> Username</label>
                <input type="text" name = "username" id="username">
                <label for="email"> email</label>
                <input type="email" name = "email" id="email">
                <label for="password"> Password</label>
                <input type="password" name = "password" id="password">
                <label for="password2"> Password confirmation</label>
                <input type="password" name = "password2" id="password2">
                <button type="submit">Send</button>
            </form>
        </section>
        </div>
        <div class="container">
        <section>
            <form action="auth.php" method = "post" class="action">
                <legend>
                    <h3>Login</h3>
                </legend>
                <label for="email"> email</label>
                <input type="email" name = "email" id="email">
                <label for="password"> Password</label>
                <input type="password" name = "password" id="password">
                <button type="submit">Send</button>
            </form>
        </section>
        </div>
    </main>
</body>
</html>