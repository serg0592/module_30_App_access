<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'test';

    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

    mysqli_query($link, "SET NAMES 'utf8'");

    $query = mysqli_query($link, "SELECT * FROM workers where id > 0") or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($query); $data[] = $row);

    var_dump($data);
?>