<?php
  ini_set('display_errors', 1);
  include 'config/lib.php';
  $pages = include 'config/pages.php';
  var_dump($pages);
  $page = getPage($pages);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body style="background-color: #ffffff; color: #000000; margin: 0; padding: 10">
        <header></header> 
        <main>
        <?php
            var_dump($_GET);
        ?>
        <ul>
          <li>
            <a href="?page=1">Главная</a>
          </li>
          <li>
            <a href="?page=2">О себе</a>
          </li>
          <li>
            <a href="?page=3">Контакты</a>
          </li>
        </ul>
        </main>
        <footer></footer>
        <form method="POST">
          Отзыв<br>
          <input type="text" name="feedback">
          <input type="submit" value="Отправить">
        </form>
        
        <?php
          include 'pages/' . $page;
        ?>          
    </body>
</html>