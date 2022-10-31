<?php
$path =  dirname(__FILE__);
define("ROOT", $path);
require (ROOT.'/config/start.php');
if (isset($_SESSION['auth'])) {
    unset($_SESSION['auth']);
}
redirect("/admin.php");

?>
