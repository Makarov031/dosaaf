<?php
$path =  dirname(__FILE__);
define("ROOT", $path);
require (ROOT.'/config/start.php');
require (ROOT.'/config/admin.start.php');
if (!$_GET['id']) {
    die('d');
}

$id = intval($_GET['id']);
$sql = "DELETE FROM `claims` WHERE `claims`.`id` = $id";
$result = Db::getPDO()->prepare($sql)->execute();

redirect("/admin.php");
?>
