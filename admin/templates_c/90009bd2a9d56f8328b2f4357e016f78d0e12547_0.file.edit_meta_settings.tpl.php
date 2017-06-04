<?php /* Smarty version 3.1.25, created on 2017-06-04 19:02:10
         compiled from "D:\OpenServer\domains\GreenSite\admin\templates\edit_meta_settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3236759342f02ae7f96_08112141%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90009bd2a9d56f8328b2f4357e016f78d0e12547' => 
    array (
      0 => 'D:\\OpenServer\\domains\\GreenSite\\admin\\templates\\edit_meta_settings.tpl',
      1 => 1496592128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3236759342f02ae7f96_08112141',
  'variables' => 
  array (
    'meta_title_ru' => 0,
    'meta_description_ru' => 0,
    'meta_description_eng' => 0,
    'meta_key_words_ru' => 0,
    'meta_key_words_eng' => 0,
    'name_ru' => 0,
    'name_eng' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_59342f02b28604_68781438',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59342f02b28604_68781438')) {
function content_59342f02b28604_68781438 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3236759342f02ae7f96_08112141';
?>
<!-- Form Validation Start -->
<div class="col-lg-6">
    <div class="box">

        <!-- Title Bar Start -->
        <div class="box-title">
            <span class="gray">Редактирование meta-тегов</span>
        </div>
        <!-- Title Bar End -->

        <!-- Content Start -->
        <div class="content">

            <form method="POST" action="edit_meta_settings.php" enctype="multipart/form-data">


                <!-- Required -->
                <label for="comment">meta_title_ru</label>
                <input type="text" name="meta_title_ru" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_title_ru']->value;?>
"/>

                <label for="comment">meta_title_eng</label>
                <input type="text" name="meta_title_eng" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_title_ru']->value;?>
"/>

                <label for="comment">meta_description_ru</label>
                <input type="text" name="meta_description_ru" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_description_ru']->value;?>
"/>

                <label for="comment">meta_description_eng</label>
                <input type="text" name="meta_description_eng" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_description_eng']->value;?>
"/>

                <label for="comment">meta_key_words_ru</label>
                <input type="text" name="meta_key_words_ru" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_key_words_ru']->value;?>
"/>

                <label for="comment">meta_key_words_eng</label>
                <input type="text" name="meta_key_words_eng" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_key_words_eng']->value;?>
"/>

                <label for="comment">name_ru</label>
                <input type="text" name="name_ru" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['name_ru']->value;?>
"/>

                <label for="comment">name_eng</label>
                <input type="text" name="name_eng" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['name_eng']->value;?>
"/>

                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>


                <!-- Required -->


                <div class="row">
                    <div class="col-lg-12 text-right">
                        <input type="submit" name="sent" value="Редактировать" class="btn btn-success btn-wide"/>
                    </div>
                </div>

            </form>

        </div>
        <!-- Content End -->

    </div>
</div>
<!-- Form Validation End -->
<?php }
}
?>