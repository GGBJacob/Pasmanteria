<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:38
  from '/var/www/html/themes/classic/templates/catalog/listing/manufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebe75a415_79666695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e11cf5e042aa4de1b75e1e3d485b520c543a10f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/listing/manufacturer.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_672a4ebe75a415_79666695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611125406672a4ebe758362_28273539', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_355337672672a4ebe759936_23069245', 'product_list');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_611125406672a4ebe758362_28273539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_611125406672a4ebe758362_28273539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products by brand %brand_name%','sprintf'=>array('%brand_name%'=>$_smarty_tpl->tpl_vars['manufacturer']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
  <div id="manufacturer-short_description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>
</div>
  <div id="manufacturer-description"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
<?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list'} */
class Block_355337672672a4ebe759936_23069245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list' => 
  array (
    0 => 'Block_355337672672a4ebe759936_23069245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-3"), 0, false);
}
}
/* {/block 'product_list'} */
}
