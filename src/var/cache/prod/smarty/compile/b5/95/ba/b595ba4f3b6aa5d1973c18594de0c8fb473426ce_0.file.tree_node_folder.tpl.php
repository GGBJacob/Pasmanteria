<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:37
  from '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebdd569b9_71624101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b595ba4f3b6aa5d1973c18594de0c8fb473426ce' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebdd569b9_71624101 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li>
<?php }
}
