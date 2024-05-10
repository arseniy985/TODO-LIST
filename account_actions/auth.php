<?php
global $mysql;
require '../elems/connectsql.php';

$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$pass = md5($pass . '1488PASCHALKO');

$user = 0;
$result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();

if($user == 0) {
    echo 'Авторизация неуспешна';
    header('Location: /');
    exit();
} else {
    echo "Авторизация успешна";
}

setcookie('user', $user['name'], time() + 3600 * 48, "/");
setcookie('login', $user['login'], time() + 3600 * 48, "/");
setcookie('pass', $user['pass'], time() + 3600 * 48, "/");

$mysql -> close();

header('Location: /');

?>