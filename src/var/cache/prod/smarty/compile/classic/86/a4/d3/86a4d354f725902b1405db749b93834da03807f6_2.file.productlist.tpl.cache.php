<?php
/* Smarty version 3.1.48, created on 2024-12-02 14:21:26
  from '/var/www/html/themes/classic/templates/catalog/_partials/productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674db4565aae88_93804905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a4d354f725902b1405db749b93834da03807f6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/productlist.tpl',
      1 => 1733140158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 2,
  ),
),false)) {
function content_674db4565aae88_93804905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '623623629674db45659d774_88745426';
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 'index') {?>
<div class="card-deck">
    <div class="card text-center border-1 orders-main-page">
        <div class="card-body position-relative">
            <a class="stretched-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>6),$_smarty_tpl ) );?>
"></a>
            <!--src ma być losowe zdjęcie produktu-->
            <img src="/img/logo.jpg" alt="PROMOCJE" title="PROMOCJE" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">PROMOCJE</h4>
            </div>
        </div>
    </div>

    <div class="card text-center border-1 orders-main-page">
        <div class="card-body position-relative">
            <!--href i src ma być koraliki - TOHO zdjęcie kategorii produktu-->
            <a class="stretched-link" href=""></a>
            <img src="/img/logo.jpg" alt="koraliki - TOHO" title="koraliki - TOHO" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">koraliki - TOHO</h4>
            </div>
        </div>
    </div>

    <div class="card text-center border-1 orders-main-page">
        <div class="card-body position-relative">
            <a class="stretched-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>7),$_smarty_tpl ) );?>
" target="_blank" rel="noopener noreferrer"></a>
            <!--src ma być losowe zdjęcie produktu-->
            <img src="/img/logo.jpg" alt="NOWOŚCI" title="NOWOŚCI" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background orders-main-page-text-1">NOWOŚCI</h4>
            </div>
        </div>
    </div>
</div>

<!-- <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productClasses", null);
if (!empty($_smarty_tpl->tpl_vars['productClass']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['productClass']->value, ENT_QUOTES, 'UTF-8');
} else { ?>col-xs-12 col-sm-6 col-xl-4<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div class="products<?php if (!empty($_smarty_tpl->tpl_vars['cssClass']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <div class="product">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['products']->value,0,3), 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>$_smarty_tpl->tpl_vars['productClasses']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div> -->

<div class="col-sm-12 cm-i-customer-greeting">
    <div class="text-center">
      <h4 class="alert-heading">POLECAMY</h4>
    </div>
</div>

<div class="row">
    <div class="card-deck recommended-products">
        <!-- Pierwszy rząd -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['products']->value,0,3), 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="card text-center border-1 orders-main-page">
            <div class="card-body position-relative">
                <a class="stretched-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"></a>
                <!-- src=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
 -->
                <img src="/img/logo.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="300" height="300" class="img-fluid">
                <div class="card-img-overlay d-flex">
                    <h4 class="align-self-center mx-auto box-background orders-main-page-text-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                </div>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <div class="card-deck recommended-products">
        <!-- Drugi rząd -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['products']->value,3,3), 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="card text-center border-1 orders-main-page">
            <div class="card-body position-relative">
                <a class="stretched-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8');?>
"></a>
                <!-- src=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
 -->
                <img src="/img/logo.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="300" height="300" class="img-fluid">
                <div class="card-img-overlay d-flex">
                    <h4 class="align-self-center mx-auto box-background orders-main-page-text-1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                </div>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<div class="col-sm-12 cm-i-customer-greeting">
    <div class="text-center">
      <h4 class="alert-heading">Tu szukaj inspiracji...</h4>
    </div>
</div>

<div class="card-deck">
    <div class="card text-center border-1">
        <div class="card-body position-relative">
            <a class="stretched-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>8),$_smarty_tpl ) );?>
"></a>
            <img src="/img/ren.jpg" alt="wzory do pobrania pdf" title="wzory do pobrania pdf" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background">wzory do pobrania pdf</h4>
            </div>
        </div>
    </div>
    <div class="card text-center border-1">
        <div class="card-body position-relative">
            <a class="stretched-link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>9),$_smarty_tpl ) );?>
" target="_blank" rel="noopener noreferrer"></a>
            <img src="/img/logo.jpg" alt="BLOG - nadodatek.pl" title="BLOG - nadodatek.pl" width="300" height="300" class="img-fluid">
            <div class="card-img-overlay d-flex">
                <h4 class="align-self-center mx-auto box-background">BLOG - nadodatek.pl</h4>
            </div>
        </div>
    </div>
</div>
<?php } else {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable3 != 'cart' && $_prefixVariable4 != 'order-confirmation') {?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productClasses", null);
if (!empty($_smarty_tpl->tpl_vars['productClass']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['productClass']->value, ENT_QUOTES, 'UTF-8');
} else { ?>col-xs-12 col-sm-6 col-xl-4<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="products<?php if (!empty($_smarty_tpl->tpl_vars['cssClass']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>$_smarty_tpl->tpl_vars['productClasses']->value), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php } else { ?>

<?php }}
}
}
