<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:37
  from '/var/www/html/admin/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebd3f9d82_48996465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af0374a09f1e25964fa5d9f55ffa5f9feab8deb4' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebd3f9d82_48996465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1765427970672a4ebd3f7131_72780860', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_1765427970672a4ebd3f7131_72780860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_1765427970672a4ebd3f7131_72780860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#voucher', window.parent.document).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_cart_rule']->value->code,'html','UTF-8' ));?>
');
		parent.add_cart_rule(<?php echo intval($_smarty_tpl->tpl_vars['new_cart_rule']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
