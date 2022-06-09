<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    session_start();

    if (isset($_POST['submit'])) {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];

            $log = $_SESSION['login'];
            $pas = $_SESSION['password'];
            $check_log = [];
            $check_log_pas = [];

            $host = 'localhost';
            $user = 'root';
            $password = '';
            $db_name = '30.4_practice';

            $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
            mysqli_query($link, "SET NAMES 'utf8'");    
            $query_log = mysqli_query($link, "SELECT * FROM users WHERE user_login = '$log'");

            if (!empty($check_log[] = mysqli_fetch_assoc($query_log))) {
                $query_pas = mysqli_query($link, "SELECT * FROM users WHERE user_login = '$log' AND user_password = '$pas'");
                if (!empty($check_log_pas[] = mysqli_fetch_assoc($query_pas))) {
                    echo 'авторизован';
                } else {
                    echo 'неверный пароль';
                }
            } else {
                echo 'такого пользователя не существует (неверный логин)';
            }
            
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
          Логин<br>
          <input type="text" name="login"/><br>
          Пароль<br>
          <input type='text' name="password"/><br>
          <input type="submit" name="submit" value="Войти"/>
        </form>          
    </body>
</html>