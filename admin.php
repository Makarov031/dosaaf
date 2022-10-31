<?php
$path =  dirname(__FILE__);
define("ROOT", $path);
require (ROOT.'/config/start.php');
require (ROOT.'/config/admin.start.php');
$claims = Db::getPDO()->query("SELECT * FROM `claims`")->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Досааф - админка</title>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>
<body>
<div class="container">
    <div class="adminwrapper cabinet">
        <h2 style="display: flex; justify-content: space-between; margin-bottom: 16px; line-height: 50px;">Админ-панель <a href="/logout.php">ВЫХОД</a></h2>
        <table class="table_price">
            <caption>Заявки</caption>
            <tr>
                <th>Имя</th>
                <th colspan="2">Номер телефона/почта</th>
            </tr>
            <?php foreach ($claims as $claim) { ?>
                <tr>
                    <td><?= $claim['name'] ?></td>
                    <td><?= $claim['phone'] ?><br><?= $claim['email'] ?></td>
                    <td><a href="/deleteclaim.php?id=<?= $claim['id']?>">Удалить заявку</a></td>
                </tr>
            <?php } ?>
        </table>


    </div>

</div>
</body>
</html>
