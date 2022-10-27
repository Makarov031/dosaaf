<?php
session_start();
$config = include (ROOT."/config/config.php");
require (ROOT."/config/Db.php");
require (ROOT."/config/Err.php");

function dump($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

/*$result = Db::getPDO()->query("SELECT * FROM `claims`")->fetchAll();
$result = Db::getPDO()->prepare("UPDATE `claims` SET `name` = 'Юрий3' WHERE `claims`.`id` = 2;")->execute();*/

