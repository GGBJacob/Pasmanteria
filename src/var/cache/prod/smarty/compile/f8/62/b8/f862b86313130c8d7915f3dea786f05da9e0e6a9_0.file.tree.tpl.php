<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:37
  from '/var/www/html/admin/themes/default/template/helpers/tree/tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebdd18c39_87465653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f862b86313130c8d7915f3dea786f05da9e0e6a9' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebdd18c39_87465653 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php }
}
