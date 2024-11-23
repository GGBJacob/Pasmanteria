<?php
/* Smarty version 3.1.48, created on 2024-11-23 21:28:39
  from '/var/www/html/admin649wtzb8x/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67423af7299130_12936825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7b32edbf8f203ca45a0fdbec06753160e4056a' => 
    array (
      0 => '/var/www/html/admin649wtzb8x/themes/default/template/content.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67423af7299130_12936825 (Smarty_Internal_Template $_smarty_tpl) {
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
