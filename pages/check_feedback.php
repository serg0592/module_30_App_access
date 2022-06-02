<?php
    $feedback = $_POST['feedback'];

    function clean($text) {
    $text = trim($text);
    $text = stripslashes($text);
    $text = strip_tags($text);
    $text = htmlspecialchars($text);

    return $text;
    }
    function check_length($text, $min, $max) {
    $result = (mb_strlen($text) < $min || mb_strlen($text) > $max);
    return !$result;
    }

    $feedback = clean($feedback);

    if (!empty($feedback)) {
    if (check_length($feedback, 10, 250)) {
        $page = getPage($pages);
    } else {
        $page = getPage($pages);
    }
    } else {
    $page = getPage($pages);
    }
?>
<h1> Спасибо за ваш отзыв! </h1>