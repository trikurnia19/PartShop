<?php
/* Smarty version 3.1.47, created on 2023-01-18 04:53:29
  from 'C:\xampp\htdocs\tokoku\admin848vhbzs3\themes\default\template\controllers\modules\modal_not_trusted_country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63c7ddb9983584_52289755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5574d557a0d3e5a51ae7d3249191a8951f3cbf1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tokoku\\admin848vhbzs3\\themes\\default\\template\\controllers\\modules\\modal_not_trusted_country.tpl',
      1 => 1674040470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c7ddb9983584_52289755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('module_name', '<strong><span class="module-display-name-placeholder"></span></strong>');?>

<div class="modal-body">
	<div class="alert alert-warning">
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are about to install "%s", a module which is not compatible with your country.','sprintf'=>array($_smarty_tpl->tpl_vars['module_name']->value)),$_smarty_tpl ) );?>
</h4>
		<p>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module was not verified by PrestaShop hence we cannot certify that it works well in your country and that it complies with our quality requirements.'),$_smarty_tpl ) );?>

			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use at your own risk.'),$_smarty_tpl ) );?>
</strong>
		</p>
	</div>
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What Should I Do?'),$_smarty_tpl ) );?>
</h3>
	<p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you are unsure about this, you should contact the Customer Service of %s to ask them to make the module compatible with your country.','sprintf'=>array($_smarty_tpl->tpl_vars['module_name']->value)),$_smarty_tpl ) );?>
<br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Moreover, we recommend that you use an equivalent module: compatible modules for your country are listed in the "Modules" tab of your back office.'),$_smarty_tpl ) );?>

	</p>
	<p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you are unsure about this module, you can look for similar modules on the official marketplace.'),$_smarty_tpl ) );?>

		<a target="_blank" rel="noopener noreferrer nofollow" href="https://addons.prestashop.com/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to browse PrestaShop Addons.'),$_smarty_tpl ) );?>
</a>
	</p>
</div>

<div class="modal-footer">
	<div class="row">
		<div class="col-sm-12 text-center">
			<a id="proceed-install-anyway" href="#" class="btn btn-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed with the installation'),$_smarty_tpl ) );?>
</a>
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to modules list'),$_smarty_tpl ) );?>
</button>
		</div>
	</div>
</div>
<?php }
}
