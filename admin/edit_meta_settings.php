<?php
require_once ('header.php');
$smarty_edit_meta_settings= new Smarty();


if(!empty($_GET['id']))
{
    $query="select meta_title_ru,meta_title_eng	,meta_description_ru,meta_description_eng,meta_key_words_ru,meta_key_words_eng,name_ru,name_eng,page_ru,page_eng from meta_setting WHERE id=".$_GET['id'];
    $result=mysqli_query($dbc,$query) or die('error_select');
    $next=mysqli_fetch_array($result);

    $smarty_edit_meta_settings->assign("id",$_GET['id']);

    $meta_title_ru=$next['meta_title_ru'];
    $meta_title_eng=$next['meta_title_eng'];

    $meta_description_ru=$next['meta_description_ru'];
    $meta_description_eng=$next['meta_description_eng'];

    $meta_key_words_ru=$next['meta_key_words_ru'];
    $meta_key_words_eng=$next['meta_key_words_eng'];

    $name_ru=$next['name_ru'];
    $name_eng=$next['name_eng'];

    $smarty_edit_meta_settings->assign("meta_title_ru", $meta_title_ru);
    $smarty_edit_meta_settings->assign("meta_title_eng", $meta_title_eng);

    $smarty_edit_meta_settings->assign("meta_description_ru", $meta_description_ru);
    $smarty_edit_meta_settings->assign("meta_description_eng", $meta_description_eng);

    $smarty_edit_meta_settings->assign("meta_key_words_ru", $meta_key_words_ru);
    $smarty_edit_meta_settings->assign("meta_key_words_eng", $meta_key_words_eng);

    $smarty_edit_meta_settings->assign("name_ru", $name_ru);
    $smarty_edit_meta_settings->assign("name_eng", $name_eng);

    $content=$smarty_edit_meta_settings->fetch("edit_meta_settings.tpl");
}
if(isset($_POST['sent']))
{
    $query="update meta_setting set meta_title_ru='".$_POST['meta_title_ru']."',meta_title_eng='".$_POST['meta_title_eng']."',meta_description_ru='".$_POST['meta_description_ru']."',meta_description_eng='".$_POST['meta_description_eng']."',meta_key_words_ru='".$_POST['meta_key_words_ru']."',meta_key_words_eng='".$_POST['meta_key_words_eng']."',name_ru='".$_POST['name_ru']."',name_eng='".$_POST['name_eng']."' where id=".$_POST['id'];
    $result=mysqli_query($dbc,$query) or die('Update error');
    $content="Успешное редактирование!";
}



$smarty_edit_meta_settings->assign("content", $content);
$smarty_edit_meta_settings->display("main.tpl");
?>