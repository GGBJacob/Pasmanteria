<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:37
  from '/var/www/html/admin/themes/default/template/controllers/shop/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebd4790c0_80949511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a445f1d8963f9e9e5591befd79632c3fb095d1' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/shop/helpers/list/list_content.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebd4790c0_80949511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1425393892672a4ebd46d953_37477409', "open_td");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_338673095672a4ebd476911_61325485', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "open_td"} */
class Block_1425393892672a4ebd46d953_37477409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'open_td' => 
  array (
    0 => 'Block_1425393892672a4ebd46d953_37477409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'url') {?>
		<td<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?> id="td_<?php if (!empty($_smarty_tpl->tpl_vars['position_group_identifier']->value)) {
echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;
} else { ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count')-1));
}?>"<?php }?> class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value) {?>pointer<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>">
	<?php } else { ?>
		<td class="pointer" onclick="document.location = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( addslashes($_smarty_tpl->tpl_vars['current_index']->value),'html','UTF-8' ));?>
&amp;shop_id=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));
if ($_smarty_tpl->tpl_vars['view']->value) {?>&amp;view<?php } else { ?>&amp;update<?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['table']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
'">
	<?php }
}
}
/* {/block "open_td"} */
/* {block "td_content"} */
class Block_338673095672a4ebd476911_61325485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_338673095672a4ebd476911_61325485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'url') {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" onmouseover="$(this).css('text-decoration', 'underline')" onmouseout="$(this).css('text-decoration', 'none')" target="_blank" rel="noopener noreferrer nofollow"><?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</a>
		<?php } else { ?>
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl',true,array(),array('addshop_url'=>1,'shop_id'=>intval($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value]))),'html','UTF-8' ));?>
" class="multishop_warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to set a URL for this shop.','d'=>'Admin.Shopparameters.Notification'),$_smarty_tpl ) );?>
</a>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
