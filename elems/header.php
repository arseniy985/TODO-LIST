<header>
    <div class="head-elem"><img src="img/gratis-png-iconos-de-computadora-de-cerdo-blanco-grande-blanco-y-negro-icono-de-cerdo.png" alt=""></div>
    <div class="head-elem head-elem-main"><a href="index.php">Главная страница</a></div>
    <div class="head-elem"></div>
    <?php if ($_COOKIE['user'] == ""): ?>
        <a href="">Авторизация</a>
    <?php else: ?>
        <p style="display: grid; grid-template-columns: 1fr; justify-items:center; row-gap: 5px;">Привет, <?=$_COOKIE['user']?> <br>
            <a href="account_actions/exit.php">Выйти из аккаунта</a>
        </p>
    <?php endif; ?>
</header>