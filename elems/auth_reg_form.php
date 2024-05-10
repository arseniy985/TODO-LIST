<div class="flex-cont">
    <form action="account_actions/reg.php" method="post" class="forma">
        <h1 class="reg-title">Регистрация</h1>
        <input type="text" id = 'login' placeholder="Введите логин" class="form-input" name="login"> <br>
        <input type="text" id = 'name' placeholder="Введите имя" class="form-input" name="name"> <br>
        <input type="text" id = 'pass' placeholder="Введите пароль" class="form-input" name="pass"> <br>
        <input type="submit" class="submit">
    </form>
    <form action="account_actions/auth.php" method="post" class="forma">
        <h1 class="reg-title">Авторизация</h1>
        <input type="text" placeholder="Введите логин" class="form-input" name="login"> <br>
        <input type="text" placeholder="Введите пароль" class="form-input" name="pass"> <br>
        <input type="submit" class="submit">
    </form>
</div>