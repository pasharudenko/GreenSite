<?php

require_once("header.php");


$smarty_archive = new Smarty();


$query="select id,name,email,number,message from orders WHERE status=1";
$result=mysqli_query($dbc,$query) or die('error_query_select');
$order_array=array();
while ($next=mysqli_fetch_array($result))
{
    $order_array[]=array("id"=>$next['id'],"name"=>$next['name'],"email"=>$next['email'],"number"=>$next['number'],"message"=>$next['message']);
}
$smarty_archive->assign("order_array", $order_array);

$content=$smarty_archive->fetch("out.tpl");
$smarty_archive->assign("content", $content);
$smarty_archive->display("main.tpl");



?>