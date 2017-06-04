<?php /* Smarty version 3.1.25, created on 2016-10-11 19:42:45
         compiled from "D:\wamp\www\Web\admin\templates\edit_out.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:377557fd087541f579_17015855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667127c4325d278cdc43916f467fa58a9f119bcf' => 
    array (
      0 => 'D:\\wamp\\www\\Web\\admin\\templates\\edit_out.tpl',
      1 => 1476200556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377557fd087541f579_17015855',
  'variables' => 
  array (
    'name' => 0,
    'number' => 0,
    'email' => 0,
    'message' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57fd0875486028_58305146',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fd0875486028_58305146')) {
function content_57fd0875486028_58305146 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '377557fd087541f579_17015855';
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

								<form method="POST" action="edit_out.php">


									<!-- Required -->
									<label for="comment">Edit name</label>
									
                                  
                                    <input type="text" name="name" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                                    	<label for="comment">Edit number</label>
                                     <input type="text" name="number" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"/>
                                     	<label for="comment">Edit email</label>
                                      <input type="text" name="email" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                                      <label for="comment">Edit message</label>
                                      <input type="text" name="message" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
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