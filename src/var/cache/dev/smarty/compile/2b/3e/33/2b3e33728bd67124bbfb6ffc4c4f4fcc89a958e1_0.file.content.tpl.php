<?php
/* Smarty version 3.1.48, created on 2024-11-13 20:45:13
  from '/var/www/html/admin151y4femb/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_673501c9748207_42369303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b3e33728bd67124bbfb6ffc4c4f4fcc89a958e1' => 
    array (
      0 => '/var/www/html/admin151y4femb/themes/default/template/content.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673501c9748207_42369303 (Smarty_Internal_Template $_smarty_tpl) {
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
