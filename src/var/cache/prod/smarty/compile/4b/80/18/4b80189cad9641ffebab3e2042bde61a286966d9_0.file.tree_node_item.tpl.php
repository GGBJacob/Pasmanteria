<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:37
  from '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebdd5f801_50013904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b80189cad9641ffebab3e2042bde61a286966d9' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebdd5f801_50013904 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
