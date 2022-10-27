<?php
    $path =  dirname(__FILE__);
    define("ROOT", $path);
    require (ROOT.'/config/start.php');

    $error = false;
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $error = true;
        Err::addError("email", "Введите корректный email");
    }
    if (!preg_match("/^(([a-zA-Z' -]{1,30})|([а-яА-ЯЁёІіЇїҐґЄє' -]{1,30}))$/u", $_POST['name'])) {
        $error = true;
        Err::addError("name","Введите корректное имя");
    }
    if (!preg_match('/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', $_POST['phone'])) {
        $error = true;
        Err::addError("phone",'Введите корректный номер телефона');
    }
    if ($error) {
        Err::bindField("name", $_POST['name']);
        Err::bindField("email", $_POST['email']);
        Err::bindField("phone", $_POST['phone']);
        header("Location: /?error");
        die();
    }

    $query = Db::getPDO()->prepare("INSERT INTO `claims` (`name`, `email`, `phone`) VALUES (:name, :email, :phone)");

    $query->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);

    $result = $query->execute();

    if ($result) {
        $_SESSION['formsended'] = true;
        header("Location: /?ok");
    } else {
        $_SESSION['formerror'] = true;
        header("Location: /?error");
    }



