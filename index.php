<?php
require_once ('header.php');
$smarty_index=new Smarty();

$query="select meta_title_$lang,meta_description_$lang,meta_key_words_$lang from meta_setting";
$result=mysqli_query($dbc,$query) or die("error1");
$next=mysqli_fetch_array($result);
$smarty_main->assign("meta_title",$next["meta_title_$lang"]);
$smarty_main->assign("meta_description",$next["meta_description_$lang"]);
$smarty_main->assign("meta_key_words",["meta_key_words_$lang"]);














$script=$_SERVER["PHP_SELF"];
$smarty_main->assign("script",$script);
$smarty_main->configLoad("$lang_conf");
$smarty_main->display('index.tpl');
?>