<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:38
  from '/var/www/html/themes/classic/templates/errors/restricted-country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebeb53458_52281966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d32c0290e6cf857d0b58a4b3275948431f7b7f5' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/restricted-country.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebeb53458_52281966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_991602719672a4ebeb50db8_92121580', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_title'} */
class Block_924377369672a4ebeb51918_84570410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_497607505672a4ebeb516f6_03382711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_924377369672a4ebeb51918_84570410', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_2093481468672a4ebeb510f9_55620327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <div class="logo"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_497607505672a4ebeb516f6_03382711', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_1344461758672a4ebeb524c1_14386552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot access this store from your country. We apologize for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_369115087672a4ebeb52291_79896837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-restricted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1344461758672a4ebeb524c1_14386552', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_2125690512672a4ebeb52f54_33127107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_991602719672a4ebeb50db8_92121580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_991602719672a4ebeb50db8_92121580',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2093481468672a4ebeb510f9_55620327',
  ),
  'page_header' => 
  array (
    0 => 'Block_497607505672a4ebeb516f6_03382711',
  ),
  'page_title' => 
  array (
    0 => 'Block_924377369672a4ebeb51918_84570410',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_369115087672a4ebeb52291_79896837',
  ),
  'page_content' => 
  array (
    0 => 'Block_1344461758672a4ebeb524c1_14386552',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2125690512672a4ebeb52f54_33127107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2093481468672a4ebeb510f9_55620327', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_369115087672a4ebeb52291_79896837', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2125690512672a4ebeb52f54_33127107', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
