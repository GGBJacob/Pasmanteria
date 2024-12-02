<?php
/* Smarty version 3.1.48, created on 2024-12-02 14:21:26
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674db4565984a2_40431862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1733140158,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_674db4565984a2_40431862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2094006040674db4565958c4_83648330';
?>
<section class="featured-products clearfix">
  <div class="col-sm-12 cm-i-customer-greeting">
    <div class="text-center">
      <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 'index') {?>
        <h4 class="alert-heading">Zamówienia telefoniczne i pomoc: 739-963-582</h4>
      <?php }?>
    </div>
    <h4></h4>
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'cssClass'=>"row"), 0, false);
?>
</section>
<?php }
}
