<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:38
  from '/var/www/html/admin/themes/default/template/helpers/list/list_action_preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebe0f5657_92078617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11be3566b92b3bbd14e8245b42a3046b8258014b' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebe0f5657_92078617 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
