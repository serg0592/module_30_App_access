<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    session_start();
    //session_destroy();

    if (isset($_POST['submit'])) {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];

            $log = $_SESSION['login'];
            $pas = $_SESSION['password'];

            $host = 'localhost';
            $user = 'root';
            $password = '';
            $db_name = '30.4_practice';

            $mysql_db = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
            $query_log = "SELECT * FROM users WHERE user_login = '$log'";
            $result_query_log = $mysql_db->query($query_log);
            $result_log = $result_query_log->FETCH(PDO::FETCH_ASSOC);

            if (!empty($result_log['user_login'])) {
                $query_pas = "SELECT * FROM users WHERE user_login = '$log' AND user_password = '$pas'";
                $result_query_pas = $mysql_db->query($query_pas);
                $result_pas = $result_query_pas->FETCH(PDO::FETCH_ASSOC);

                if (!empty($result_pas['user_password'])) {
                    $_SESSION['auth_user'] = $result_pas;
                    echo 'авторизован';
                } else {
                    echo 'неверный пароль';
                }
            } else {
                echo 'такого пользователя не существует (неверный логин)';
            }
            
        } else {
            $_SESSION['login'] = '';
            $_SESSION['password'] = '';
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