<?php
/* Smarty version 3.1.48, created on 2024-12-02 05:15:50
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674d3476133d71_00676767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1733098863,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674d3476133d71_00676767 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart">
  <div class="blockcart cart-preview" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="cart-dropdown">
      <a  href="#"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
"
          onclick="toggleDropdown(event, '#cartDropdown')"
      >
        <div class="shopping-cart-nav">
          <i class="fas fa-shopping-cart fa-fw"></i>
          <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 szt.</span>
          <i class="material-icons icons-navigation-bar">&#xe5c5</i>
        </div>
      </a>

      <!-- Dropdown content -->
      <div class="cart-dropdown-content hidden" id="cartDropdown">
        <b>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?action=show" class="cart-summary-link">
              <div class="cart-summary">
                W TWOIM KOSZYKU: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 szt., <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['total_price'], ENT_QUOTES, 'UTF-8');?>
 zł
              </div>
            </a>
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
                  <li class="product-in-cart">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="cart-product-link">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
            </ul>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
          <div class="dropdown-divider"></div>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?action=show" class="cart-summary-link">
            <div class="cart-summary">
              <i class="fas fa-angle-right fa-fw"></i>
              Zamów
            </div>
          </a>
          <?php }?>
        </b>
      </div>
    </div>
  </div>
</div><?php }
}
