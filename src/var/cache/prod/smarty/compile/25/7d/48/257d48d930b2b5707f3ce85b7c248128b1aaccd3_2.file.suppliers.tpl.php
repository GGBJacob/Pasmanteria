<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:38
  from '/var/www/html/themes/classic/templates/catalog/suppliers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebe700f79_20013475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '257d48d930b2b5707f3ce85b7c248128b1aaccd3' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/suppliers.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebe700f79_20013475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1905876007672a4ebe700770_60419942', 'brand_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/brands.tpl');
}
/* {block 'brand_header'} */
class Block_1905876007672a4ebe700770_60419942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_header' => 
  array (
    0 => 'Block_1905876007672a4ebe700770_60419942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
<?php
}
}
/* {/block 'brand_header'} */
}
