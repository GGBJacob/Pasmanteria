<?php
/* Smarty version 3.1.48, created on 2024-11-23 22:45:55
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67424d13436ae9_96829800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1732393004,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67424d13436ae9_96829800 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
  <div class="blockcart cart-preview" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="cart-dropdown">
      <a  href="#"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
"
          onclick="toggleDropdown3(event, '#cartDropdown')"
      >
        <div class="shopping-cart-nav">
          <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
          <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 szt.</span>
          <i class="material-icons icons-navigation-bar">arrow_drop_down</i>
        </div>
      </a>

      <!-- Dropdown content -->
      <div class="cart-dropdown-content hidden" id="cartDropdown">
        <b>
          <div class="cart-summary">
            W TWOIM KOSZYKU: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 szt., x zł
          </div>
          <div class="cart-products">
            <ul>
              <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
                <div class="dropdown-divider"></div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                  <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
            </ul>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
            <div class="dropdown-divider"></div>
            <a class="cart-order" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?action=show">
              <i class="material-icons icons-navigation-bar">&#xe315;</i>
              Zamów
            </a>
          <?php }?>
        </b>
      </div>
    </div>
  </div>
</div>
<!-- end /var/www/html/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}