<?php
/* Smarty version 3.1.48, created on 2024-11-30 15:25:56
  from '/var/www/html/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674b207476f627_87766415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6eead84a7a0713719d5b8566271288962cc960f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/header.tpl',
      1 => 1732976755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b207476f627_87766415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_309058492674b20747654d7_17582372', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55731483674b2074769344_22287234', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1076505258674b207476b7f8_80149319', 'header_logo_search');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106231197674b207476e312_55988896', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_309058492674b20747654d7_17582372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_309058492674b20747654d7_17582372',
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
class Block_55731483674b2074769344_22287234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_55731483674b2074769344_22287234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <!--<div class="col-md-5 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>-->
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
/* {block 'header_logo_search'} */
class Block_1076505258674b207476b7f8_80149319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_logo_search' => 
  array (
    0 => 'Block_1076505258674b207476b7f8_80149319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header_logo_search">
    <div class="container">
      <div class="row">
        <!-- PUSTY DIV LEWY -->
        <div class="col-sm-4 cm-header-logo"> &nbsp;</div>
        <!-- LOGO DIV ŚRODEK -->
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
        <!-- SEARCH BAR DIV PRAWY -->
        <div id="search_widget" class="search-widgets" data-search-controller-url="//localhost/szukaj">
          <form method="get" action="//localhost/szukaj">
            <input type="hidden" name="controller" value="search">
            <i class="material-icons search" aria-hidden="true">search</i>
            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
            <input type="text" name="s" value placeholder="Szukaj" aria-label="Szukaj" class="ui-autocomplete-input" autocomplete="off">
            <i class="material-icons clear" aria-hidden="true">clear</i>
          </form>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_logo_search'} */
/* {block 'header_top'} */
class Block_1106231197674b207476e312_55988896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1106231197674b207476e312_55988896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
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
    <div class="col-sm-8 cm-header-breadcrumb">
      <div class="row-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="a-breadcrumb" href="//localhost/">
                <i class="home">
                  <i class="material-icons violet-nav-icon">&#xe88a;</i>
                </i>
                <span class="sr-only">Home</span>
              </a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-sm-4 cm-header-phone text-right">
      <div class="row-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item-right">
              <a class="a-breadcrumb-right">
                <i class="home">
                  <i class="material-icons violet-nav-icon">&#xe0b0;</i>
                  <i class="violet-nav-icon phone-text">Zamówienia telefoniczne i pomoc: 739-963-582</i>
                </i>
                <span class="sr-only">Phone</span>
              </a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
   </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
