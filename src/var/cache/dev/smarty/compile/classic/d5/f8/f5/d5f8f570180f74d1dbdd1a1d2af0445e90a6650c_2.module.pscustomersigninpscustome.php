<?php
/* Smarty version 3.1.48, created on 2024-11-10 21:26:19
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_673116eb87b179_38466973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1731270340,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673116eb87b179_38466973 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/classic/modules/ps_customersignin/ps_customersignin.tpl -->
<div id="_desktop_user_info">
  <div class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <a
        class="logout hidden-sm-down"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
"
        rel="nofollow"
      >
        <i class="material-icons">&#xE7FF;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
      <a
        class="account"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
        <span class="hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </a>
    <?php } else { ?>
      <!-- Wrapper for dropdown -->
      <div class="dropdown">
        <a
          href="#"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in or Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
          onclick="toggleDropdown(event)"
        >
          <div class="my-account-nav">
            <i class="material-icons icons-navigation-bar">&#xE7FF;</i>
            <span class="hidden-sm-down text-navigation-bar"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Moje konto','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            <i class="material-icons icons-navigation-bar">arrow_drop_down</i>
          </div>
        </a>
        <!-- Dropdown content -->
        <div class="dropdown-content" id="loginDropdown">

          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
            <i class="material-icons icons-dropdown">login</i> 
            Zaloguj się
          </a>

          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
            <i class="material-icons icons-dropdown">edit</i> 
            Zarejestruj się
          </a>

          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">Moje konto</a>

          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">Zamówienia</a>

          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">Książka adresowa</a>

          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">Zmiana hasła</a>
        </div>
      </div>
    <?php }?>
  </div>
</div>





<!-- end /var/www/html/themes/classic/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
