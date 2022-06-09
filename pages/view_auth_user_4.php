<?php
    session_start();

    $log = $_SESSION['login'];
    $pas = $_SESSION['password'];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = '30.4_practice';

    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
    mysqli_query($link, "SET NAMES 'utf8'");    
    $query = mysqli_query($link, "SELECT * FROM users WHERE user_login = '$log' AND user_password = '$pas'");

    for ($authorised_users = []; $authorised_users[] = mysqli_fetch_assoc($query););
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <div class="table">
            <ul class="table-head">
                <li class="ID">ID</li>
                <li class="first_name">Имя</li>
                <li class="last_name">Фамилия</li>
                <li class="log">Логин</li>
                <li class="pas">Пароль</li>
            </ul>
            <ul class="user_1">
                <li class="ID">
                    <?php
                        if (isset($authorised_users[0]['id'])) {
                            echo $authorised_users[0]['id'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="first_name">
                    <?php
                        if (isset($authorised_users[0]['first_name'])) {
                            echo $authorised_users[0]['first_name'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="last_name">
                    <?php
                        if (isset($authorised_users[0]['last_name'])) {
                            echo $authorised_users[0]['last_name'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="log">
                    <?php
                        if (isset($authorised_users[0]['user_login'])) {
                            echo $authorised_users[0]['user_login'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="pas">
                    <?php
                        if (isset($authorised_users[0]['user_password'])) {
                            echo $authorised_users[0]['user_password'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
            </ul>
            
        <form></form>          
    </body>
</html>