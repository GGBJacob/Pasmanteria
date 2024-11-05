<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:38
  from '/var/www/html/admin/themes/default/template/helpers/list/list_action_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebe17b243_32030014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03d14376ebbcd3ed5f7ec8dd12cd45b8f4c00804' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebe17b243_32030014 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" id="details_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['params']->value['action'],'html','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="">
	<i class="icon-eye-open"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
