<?php 
  include 'config/lib.php';
  $pages = include 'config/pages.php';
  var_dump($pages);
  $page = getPage($pages);
  //$page = (int)$_GET['page']; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <header></header>
        <main>
        <?php
            echo "hi";
            var_dump($_GET);
        ?>
        <form method="POST">
          <p>Ваш логин: 
            <input type="text" name="login" />
          </p>
          <p>Ваш пароль: 
            <input type="text" name="password" />
          </p>
          <input type="checkbox" name="test[]" value="1">
          <input type="checkbox" name="test[]" value="2">
          <input type="checkbox" name="test[]" value="3">
          <input type="submit"  value="отправить">
        </form>
        <ul>
          <li>
            <a href="?page=1">Главная</a>
          </li>
          <li>
            <a href="?page=2">Пользователи</a>
          </li>
          <li>
            <a href="?page=3">Пользователь</a>
          </li>
        </ul>
        </main>
        <footer></footer>
        <?php
          include 'pages/' . $page;
        ?>
    </body>
</html>