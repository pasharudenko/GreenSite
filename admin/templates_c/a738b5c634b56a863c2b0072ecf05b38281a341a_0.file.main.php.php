<?php /* Smarty version 3.1.25, created on 2016-10-12 14:39:57
         compiled from "D:\wamp\www\Web\admin\main.php" */ ?>
<?php
/*%%SmartyHeaderCode:2730157fe12fd1632a7_07270104%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a738b5c634b56a863c2b0072ecf05b38281a341a' => 
    array (
      0 => 'D:\\wamp\\www\\Web\\admin\\main.php',
      1 => 1476204289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2730157fe12fd1632a7_07270104',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57fe12fd1bf3b4_16711154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fe12fd1bf3b4_16711154')) {
function content_57fe12fd1bf3b4_16711154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2730157fe12fd1632a7_07270104';
echo '<?php

';?>require_once("header.php");
$smarty_main = new Smarty();






$content=$smarty_main->fetch("index.tpl");


$smarty_main->assign("content", $content);
$smarty_main->display("main.tpl");


<?php echo '?>';
}
}
?>