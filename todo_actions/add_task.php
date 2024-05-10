<?php
global $mysql;
require '../elems/connectsql.php';

$login = $_COOKIE['login'];
$pass = $_COOKIE['pass'];

$result = $mysql -> query("SELECT id FROM users WHERE login='$login' AND pass='$pass'");
while ($row = $result->fetch_assoc()) {
    $user_id = $row['id'];
    setcookie('user_id', $user_id, time() + 3600 * 48, "/");
}

$task = filter_var(trim(ucfirst($_POST['task'])),FILTER_SANITIZE_STRING);

if ($task == '') {
    echo 'Please enter your task';
    exit();
}

$mysql -> query("INSERT INTO `tasks` (`task`, `user_id`) VALUES ('$task','$user_id')");

header('Location: /');
$mysql -> close();
