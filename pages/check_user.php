<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = '30.4_practice';

    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
    mysqli_query($link, "SET NAMES 'utf8'");    
    $query = mysqli_query($link, "SELECT * FROM users");

    for ($authorised_users = []; $authorised_users[] = mysqli_fetch_assoc($query););
    var_dump($authorised_users);
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
        <form></form>          
    </body>
</html>