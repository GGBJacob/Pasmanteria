<?php
/* Smarty version 3.1.48, created on 2024-11-23 22:45:55
  from 'module:paypalviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67424d131926b8_80619032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fb5b414db934f3cbce1f81a5328eb449f2525ce' => 
    array (
      0 => 'module:paypalviewstemplatesfront',
      1 => 1732383067,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67424d131926b8_80619032 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/paypal/views/templates/front/prefetch.tpl -->
<?php if ((isset($_smarty_tpl->tpl_vars['resources']->value)) && is_array($_smarty_tpl->tpl_vars['resources']->value) && empty($_smarty_tpl->tpl_vars['resources']->value) == false) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resources']->value, 'resource');
$_smarty_tpl->tpl_vars['resource']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->do_else = false;
?>
      <link href="<?php echo htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['resource']->value), ENT_QUOTES, 'UTF-8');?>
" rel="prefetch" as="script">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<!-- end /var/www/html/modules/paypal/views/templates/front/prefetch.tpl --><?php }
}
