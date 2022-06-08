<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    if (isset($_POST['submit'])) {
        if (!empty($_POST['first_name']) && !empty($_POST['login']) && !empty($_POST['password'])) {
            $f_name = $_POST['first_name'];
            $l_name = $_POST['last_name'];
            $log = $_POST['login'];
            $pas = $_POST['password'];

            $host = 'localhost';
            $user = 'root';
            $password = '';
            $db_name = '30.4_practice';

            $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
            mysqli_query($link, "SET NAMES 'utf8'");    
            $query = mysqli_query($link, "INSERT INTO users (first_name, last_name, user_login, user_password) 
                                            VALUES ('$f_name', '$l_name', '$log', '$pas')");
        } else {
            echo 'необходимо заполнить имя, логин и пароль';
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
          Имя<br>
          <input type="text" name="first_name"/><br>
          Фамилия<br>
          <input type="text" name="last_name"/><br>
          Логин<br>
          <input type="text" name="login"/><br>
          Пароль<br>
          <input type='text' name="password"/><br>
          <input type="submit" name="submit" value="Отправить"/>
        </form>          
    </body>
</html>