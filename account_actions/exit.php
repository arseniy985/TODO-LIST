<?php
setcookie('user', $user['name'], time() - 3600 * 48, "/");

header('Location: /');
?>