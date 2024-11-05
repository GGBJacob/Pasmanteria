<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:38
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebe94d010_69841608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd172ace6b30573009cced4e086bcdd20578aa799' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-top.tpl' => 1,
    'file:checkout/_partials/cart-summary-products.tpl' => 1,
    'file:checkout/_partials/cart-summary-subtotals.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
function content_672a4ebe94d010_69841608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1609679941672a4ebe94ada2_89512994', 'hook_checkout_summary_top');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_599418425672a4ebe94b6c4_32500755', 'cart_summary_products');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1392422931672a4ebe94bd81_75820808', 'cart_summary_subtotals');
?>

  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1775324889672a4ebe94c433_33942437', 'cart_summary_totals');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_620881750672a4ebe94caa2_89720380', 'cart_summary_voucher');
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
class Block_1609679941672a4ebe94ada2_89512994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
    0 => 'Block_1609679941672a4ebe94ada2_89512994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_products'} */
class Block_599418425672a4ebe94b6c4_32500755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
    0 => 'Block_599418425672a4ebe94b6c4_32500755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
class Block_1392422931672a4ebe94bd81_75820808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
    0 => 'Block_1392422931672a4ebe94bd81_75820808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-subtotals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_totals'} */
class Block_1775324889672a4ebe94c433_33942437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
    0 => 'Block_1775324889672a4ebe94c433_33942437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_summary_voucher'} */
class Block_620881750672a4ebe94caa2_89720380 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
    0 => 'Block_620881750672a4ebe94caa2_89720380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
}
