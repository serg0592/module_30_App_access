<?php
    session_start();
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 1;
    } else {
        $_SESSION['counter'] = $_SESSION['counter'] + 1;
    }
    echo "Вы обновили страницу " . $_SESSION['counter'] . " раз";

    setcookie('test', 'Test!');
    echo $_COOKIE['test'];
?>