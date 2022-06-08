<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    session_start();

    if (isset($_POST['submit'])) {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
        } else {
            echo 'введите логин и пароль';
        }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST" action="">
          Авторизация<br>
          Логин<br>
          <input type="text" name="login"/><br>
          Пароль<br>
          <input type='text' name="password"/><br>
          <input type="submit" name="submit" value="Войти"/>
        </form>          
    </body>
</html>