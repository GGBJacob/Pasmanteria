<?php
/* Smarty version 3.1.48, created on 2024-11-26 16:30:28
  from '/var/www/html/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6745e994177ac3_26636671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6eead84a7a0713719d5b8566271288962cc960f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/header.tpl',
      1 => 1732635024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6745e994177ac3_26636671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8355652406745e9941722b8_92249976', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9564126326745e994173966_13515530', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12828541866745e994174329_96876647', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_8355652406745e9941722b8_92249976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_8355652406745e9941722b8_92249976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_9564126326745e994173966_13515530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_9564126326745e994173966_13515530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>
          <div class="col-md-7 right-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'custom_js'} */
class Block_20159424396745e994176054_54886391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars((defined('__PS_BASE_URI__') ? constant('__PS_BASE_URI__') : null), ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/js/custom.js"><?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'custom_js'} */
/* {block 'custom_css'} */
class Block_18117271746745e994176fb6_07706660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo htmlspecialchars((defined('__PS_BASE_URI__') ? constant('__PS_BASE_URI__') : null), ENT_QUOTES, 'UTF-8');?>
themes/classic/assets/css/custom.css" type="text/css" media="all">
  <?php
}
}
/* {/block 'custom_css'} */
/* {block 'header_top'} */
class Block_12828541866745e994174329_96876647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_12828541866745e994174329_96876647',
  ),
  'custom_js' => 
  array (
    0 => 'Block_20159424396745e994176054_54886391',
  ),
  'custom_css' => 
  array (
    0 => 'Block_18117271746745e994176fb6_07706660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
        <div class="header-top-right col-md-10 col-sm-12 position-static">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20159424396745e994176054_54886391', 'custom_js', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18117271746745e994176fb6_07706660', 'custom_css', $this->tplIndex);
?>


  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php
}
}
/* {/block 'header_top'} */
}
