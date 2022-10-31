<?php
$path =  dirname(__FILE__);
define("ROOT", $path);
require (ROOT.'/config/start.php');
if (isset($_POST['auth'])) {

    if ($_POST['login'] == $config['login'] && $_POST['password'] == $config['password']) {
        $_SESSION['auth'] = true;
        redirect('/admin.php');
    }
    $mess = "Пароль не правильный!";

}

?>
<html>
<head>

</head>
<body>
    <div class="container">
        <div class="formwrapper">
            <form method="post" action="">
                <h3>Войти в админку</h3>
                <input name="login" placeholder="логин">
                <input type="password" name="password" placeholder="пароль">
                <input type="submit" name="auth">
                <?= @$mess ?>
            </form>
        </div>
    </div>
<style>
    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center
    }
    .formwrapper {
        display: flex;
        flex-direction: column;
    }
    .formwrapper input {
        width: 100%;
        height: 40px;
        margin-bottom: 8px;

    }
</style>
</body>
</html>

