<?php
$config = include (ROOT."/config/config.php");
require (ROOT."/config/Db.php");
/*
$db = new Db($config);*/
var_dump(Db::$pdo);
var_dump(Db::getPDO());
var_dump(Db::$pdo);

var_dump($db->getPDO());
die();
