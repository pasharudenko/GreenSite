<?php /* Smarty version 3.1.25, created on 2016-10-12 15:38:34
         compiled from "D:\wamp\www\Web\admin\templates\edit_pages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:310557fe20badbada5_19217181%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39416aa3bd488ab79e2f218dbc096d2cb96502f7' => 
    array (
      0 => 'D:\\wamp\\www\\Web\\admin\\templates\\edit_pages.tpl',
      1 => 1476272311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310557fe20badbada5_19217181',
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_key_words' => 0,
    'title' => 0,
    'content' => 0,
    'name' => 0,
    'page' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57fe20bae23e73_82714119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fe20bae23e73_82714119')) {
function content_57fe20bae23e73_82714119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '310557fe20badbada5_19217181';
?>
<!-- Form Validation Start -->
					<div class="col-lg-6">
						<div class="box">
                            
							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Edit pharm_content </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="edit_pages.php">


									<!-- Required -->
									<label for="comment">Edit name</label>
									
                                  
                                    <input type="text" name="meta_title" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
"/>
                                    	<label for="comment">Edit number</label>
                                     <input type="text" name="meta_description" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
"/>
                                     	<label for="comment">Edit email</label>
                                      <input type="text" name="meta_key_words" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_key_words']->value;?>
"/>
                                      <label for="comment">Edit message</label>
                                      <input type="text" name="title" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/>
                                      <label for="comment">Edit message</label>
                                      <input type="text" name="content" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
"/>
                                      <label for="comment">Edit message</label>
                                      <input type="text" name="name" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                                          <label for="comment">Edit message</label>
                                      <input type="text" name="page" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"/>
									<div class="spacer"></div>
                                  
									<!-- Required -->
							
                              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
									<div class="row">
										<div class="col-lg-12 text-right">
											<input type="submit" name="sent" value="Edit" class="btn btn-success btn-wide"/>
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