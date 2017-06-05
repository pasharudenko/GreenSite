<?php
require_once ('header.php');
$smarty_index=new Smarty();
/////////////////////////////////
$query="select name_$lang,page from meta_setting";
$result=mysqli_query($dbc,$query) or die("error1");
$array_meta=array();
while($next=mysqli_fetch_array($result))
{


    $array_meta[]=array("name"=>$next["name_$lang"],"page"=>$next['page']);

}
$smarty_main->assign("array_meta",$array_meta);
///////////////////////////////////
$query_meta="select meta_title_$lang,meta_description_$lang,meta_key_words_$lang from meta_setting WHERE page='index'";
$result_meta=mysqli_query($dbc,$query_meta) or die('error2');
$next_meta=mysqli_fetch_array($result_meta);
$meta_title=$next_meta["meta_title_$lang"];
$meta_description=$next_meta["meta_title_$lang"];
$meta_key_words=$next_meta["meta_title_$lang"];
$smarty_main->assign("meta_title",$meta_title);
//////////////////////////////////






$script=$_SERVER["PHP_SELF"];
$smarty_main->assign("script",$script);
$smarty_main->configLoad("$lang_conf");
$smarty_main->display('index.tpl');
?>