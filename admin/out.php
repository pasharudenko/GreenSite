<?php

require_once("header.php");

   
$smarty_index = new Smarty();





$content=$smarty_index->fetch("out.tpl");
$smarty_index->assign("content", $content);
$smarty_index->display("main.tpl");



?>