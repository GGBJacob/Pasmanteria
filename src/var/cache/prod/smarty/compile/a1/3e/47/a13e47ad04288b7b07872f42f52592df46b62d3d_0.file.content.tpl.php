<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:37
  from '/var/www/html/admin/themes/default/template/controllers/not_found/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebd6ba540_87195323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a13e47ad04288b7b07872f42f52592df46b62d3d' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/not_found/content.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebd6ba540_87195323 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['controller']->value)) && !empty($_smarty_tpl->tpl_vars['controller']->value) && $_smarty_tpl->tpl_vars['controller']->value != 'adminnotfound') {?>
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The controller %s is missing or invalid.','sprintf'=>array($_smarty_tpl->tpl_vars['controller']->value)),$_smarty_tpl ) );?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to the previous page'),$_smarty_tpl ) );?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the dashboard'),$_smarty_tpl ) );?>

</a>
<?php }
}
