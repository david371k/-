<?php
    include('tpl/header.php');
    include('tpl/nav.php');
?>
<main class="flex">
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
        <p>
            <label>Name:</label>
            <input name="name" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Login:</label>
            <input type="text" name="login" size="15" maxlength="15">
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="pass" size="15" maxlength="15">
        </p>
        <p class="submit-btn">
            <input class="btn" type="submit" name="submit" value="Зарегистрироваться">
        </p>
    </form>
</main>
<?php
    include('tpl/footer.php');
?>