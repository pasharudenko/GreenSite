<?php
require_once("header.php");
$smarty_index = new Smarty();







$query="select id,name_ru,name_eng from meta_setting";
$result=mysqli_query($dbc,$query) or die("Error with query connection");
$page_array=array();
While($next=mysqli_fetch_array($result))
{
    $page_array[]=array("id"=>$next['id'],"name_ru"=>$next['name_ru'],"name_eng"=>$next['name_eng']);
}
$smarty_index->assign('page_array',$page_array);







$content=$smarty_index->fetch("index.tpl");
$smarty_index->assign("content", $content);
$smarty_index->display("main.tpl");



?>