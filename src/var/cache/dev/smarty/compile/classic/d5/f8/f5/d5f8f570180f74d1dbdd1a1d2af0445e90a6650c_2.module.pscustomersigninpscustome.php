<?php
/* Smarty version 3.1.48, created on 2024-11-23 22:45:55
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67424d1342e763_39321858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1732398161,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67424d1342e763_39321858 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/classic/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info" class="user-info dropdown">
  <a
    href="#"
    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in or Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
    onclick="toggleDropdown(event, '#loginDropdown')"
  >
  <div class="my-account-nav">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <i class="material-icons icons-navigation-bar">&#xe9ba;</i>
      <span class="hidden-sm-down text-navigation-bar logout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wyloguj się','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      <i class="material-icons icons-navigation-bar">arrow_drop_down</i>

    <?php } else { ?>
      <div class="my-account-nav">
        <i class="material-icons icons-navigation-bar">&#xE7FF;</i>
        <span class="hidden-sm-down text-navigation-bar" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Moje konto','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <i class="material-icons icons-navigation-bar">arrow_drop_down</i>

        <div class="dropdown-content" id="loginDropdown">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">Logowanie</a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">Rejestracja</a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">Moje zamówienia</a>
        </div>
      </div>
    <?php }?>
    </a>
  </div>
</div>
<!-- end /var/www/html/themes/classic/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}