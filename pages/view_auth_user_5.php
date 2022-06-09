<?php
    session_start();
    //session_destroy();

    $log = $_SESSION['login'];
    $pas = $_SESSION['password'];
    if (isset($_SESSION['auth_user'])) {
        $auth_user = $_SESSION['auth_user'];
    }
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
                        if (isset($auth_user['id'])) {
                            echo $auth_user['id'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="first_name">
                    <?php
                        if (isset($auth_user['first_name'])) {
                            echo $auth_user['first_name'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="last_name">
                    <?php
                        if (isset($auth_user['last_name'])) {
                            echo $auth_user['last_name'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="log">
                    <?php
                        if (isset($auth_user['user_login'])) {
                            echo $auth_user['user_login'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
                <li class="pas">
                    <?php
                        if (isset($auth_user['user_password'])) {
                            echo $auth_user['user_password'];
                        } else {
                            echo '';
                        }
                    ?>
                </li>
            </ul>
            
        <form></form>          
    </body>
</html>