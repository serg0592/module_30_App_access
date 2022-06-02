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
    if (check_length($feedback, 1, 250)) {
        echo "Спасибо за отзыв!";
    } else {
        echo "Упс! Что-то пошло не так...";
    }
    } else {
        echo "Упс! Что-то пошло не так...";
    }
?>
<div class="feedback">
    <?php
        echo $feedback;
    ?>
</div>