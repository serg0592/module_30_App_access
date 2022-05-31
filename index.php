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