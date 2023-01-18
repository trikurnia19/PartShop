<?php
/* Smarty version 3.1.47, created on 2023-01-18 04:51:49
  from 'C:\xampp\htdocs\tokoku\admin848vhbzs3\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63c7dd553eb511_45266204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f185f4666fd5aac3d47854c24dde2bcbf15d87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tokoku\\admin848vhbzs3\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1674040474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c7dd553eb511_45266204 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
