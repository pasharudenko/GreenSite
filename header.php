<?php
require_once('admin/param.php');
define("SMARTY_LIB","libs/");
require_once(SMARTY_LIB."smarty.class.php");
$smarty_main=new Smarty();
session_start();



if(isset($_GET['lang']))
{
    $lang = $_GET['lang'];

    setcookie("lang", $lang, time() + 60 * 60 * 24 * 30 * 3);
}

else if(isset($_COOKIE['lang']))
{
    $lang = $_COOKIE['lang'];
}

else
{
    $lang = "ru";
}

$lang_conf = "conf/$lang.conf";






///////////////Запрет на кеширование////////////////
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");
?>


