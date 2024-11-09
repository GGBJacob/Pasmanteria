<?php
/* Smarty version 3.1.48, created on 2024-11-09 17:30:49
  from '/var/www/html/admin909ou36bj/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672f8e3979e0a2_32864469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110627d72b89e0a1b5422765617fea353d0d5956' => 
    array (
      0 => '/var/www/html/admin909ou36bj/themes/default/template/content.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672f8e3979e0a2_32864469 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
