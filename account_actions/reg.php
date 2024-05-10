<?php

use function PHPSTORM_META\type;

global $mysql;
require '../elems/connectsql.php';

$name = filter_var(trim(ucfirst($_POST['name'])),FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 25) {
    echo 'Логин должен содержать от 5 до 25 символов';
    exit();
} else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 30) {
    echo 'Пароль должен содержать от 6 до 30 символов';
    exit();
} 
$pass = md5($pass . '1488PASCHALKO');

$mysql -> query("INSERT INTO `users` (`login`, `pass`, `name`)
VALUES('$login','$pass','$name')");

$mysql -> close();

header('Location: /');
?>