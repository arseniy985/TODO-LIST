<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'elems/head.php' ?>
</head>
<body>
    <?php require 'elems/header.php' ?>
    <hr>
    <main>
        <?php if($_COOKIE['user'] == ''): require 'elems/auth_reg_form.php' ?>
        <!-- TODO лист!!!!! пасхалколвалвазщлузщалукалщзук -->
        <?php else: require 'elems/todo.php'; endif ?>
    </main>
</body>
</html>