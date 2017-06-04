<?php /* Smarty version 3.1.25, created on 2017-06-04 17:55:29
         compiled from "D:\OpenServer\domains\GreenSite\admin\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:273159341f61d55748_22757920%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b994d98be739a724876f2130ec7ae0777734e97' => 
    array (
      0 => 'D:\\OpenServer\\domains\\GreenSite\\admin\\templates\\index.tpl',
      1 => 1496588129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273159341f61d55748_22757920',
  'variables' => 
  array (
    'page_array' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_59341f61d9a428_86756456',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59341f61d9a428_86756456')) {
function content_59341f61d9a428_86756456 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '273159341f61d55748_22757920';
?>
<div class="col-lg-6">
<div class="box">




		<!--	<div class="row">

				<div class="col-lg-12 text-center">
			
					<div class="box">
						
						<div class="content">
							<h1 style="color:#ff503f;font-weight: bold;">Добро пожаловать в администраторскую часть</h1>
							<h3>Здесь Вы сможете с легкостью управлять страницами Вашего сайта!</h3>
						</div>
					</div>
				</div>

			</div> -->

	<!-- Title Bar Start -->
	<div class="box-title red">
		<span>Управление страницами</span>
	</div>
	<!-- Title Bar End -->

	<!-- Content Start -->
	<div class="content">
		<div class="row">
			<div class="col-lg-12">
				<table class="regular-table non-stripped bordered hoverable">
					<thead>

					<th>Название страницы</th>
					<th>Управление</th>

					</thead>

					<tbody>

					<!-- Table Row Start -->
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page_array']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
					<tr>

						<td><?php echo $_smarty_tpl->tpl_vars['page_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name_ru'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name_eng'];?>
</td>


						<td><a href="edit_meta_settings.php?id=<?php echo $_smarty_tpl->tpl_vars['page_array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Редактировать</a></td>

					</tr>
				<?php endfor; endif; ?>
					<!-- Table Row End -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Content End -->

</div>

</div><?php }
}
?>