<?php
/* Smarty version 3.1.47, created on 2023-01-18 04:44:17
  from 'C:\xampp\htdocs\tokoku\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63c7db91c31228_61483286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60127effd476e56172ac910b0aefdc993531f6e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tokoku\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1674040477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c7db91c31228_61483286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\tokoku\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\60\\12\\7e\\60127effd476e56172ac910b0aefdc993531f6e3_2.file.helpers.tpl.php',
    'uid' => '60127effd476e56172ac910b0aefdc993531f6e3',
    'call_name' => 'smarty_template_function_renderLogo_200761059963c7db91b5a4b5_86632440',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_200761059963c7db91b5a4b5_86632440 */
if (!function_exists('smarty_template_function_renderLogo_200761059963c7db91b5a4b5_86632440')) {
function smarty_template_function_renderLogo_200761059963c7db91b5a4b5_86632440(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_200761059963c7db91b5a4b5_86632440 */
}
