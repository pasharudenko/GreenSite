<?php /* Smarty version 3.1.25, created on 2016-10-13 20:39:06
         compiled from "D:\wamp\www\Web\admin\templates\delete_out.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2341757ffb8aa129e46_94965809%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37458e2bc8c151845d554a8d4bfa0bbd8df2538' => 
    array (
      0 => 'D:\\wamp\\www\\Web\\admin\\templates\\delete_out.tpl',
      1 => 1476376740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2341757ffb8aa129e46_94965809',
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'archive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57ffb8aa180c93_98460252',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ffb8aa180c93_98460252')) {
function content_57ffb8aa180c93_98460252 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2341757ffb8aa129e46_94965809';
?>

<h2>Do you really want to to delete <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
?</h2>
<form class="basic-form"  action="delete_out.php" method="post">
	<div>
		<label for="columned-radios" class="icheck-label">Yes</label>
		<input type="radio" class="" value="yes" name="del" checked="checked" /> <!-- class="icheck-blue"-->

	</div>
	<div>
		<label class="icheck-label">no</label>
		<input type="radio" class="" value="no" name="del" />

	</div>
 



	<input type="submit" name="delete" value="Delete"/>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
      <input type="text" name="archive" value="<?php echo $_smarty_tpl->tpl_vars['archive']->value;?>
"/>
</form>








<?php echo '<script'; ?>
 src="http://creativico.com/admin-templates/PixProV2/assets/icheck/icheck.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://creativico.com/admin-templates/PixProV2/_demo/icheck.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://creativico.com/admin-templates/PixProV2/_demo/all-pages.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
?>