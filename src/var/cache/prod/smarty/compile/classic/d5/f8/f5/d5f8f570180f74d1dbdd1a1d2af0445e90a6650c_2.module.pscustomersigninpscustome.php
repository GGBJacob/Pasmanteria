<?php
/* Smarty version 3.1.48, created on 2024-12-01 18:04:22
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_674c9716e74340_46640677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1733072616,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674c9716e74340_46640677 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="_desktop_user_info" class="user-info dropdown">
  <a
    href="#"
    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in or Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
    onclick="toggleDropdown(event, '#loginDropdown')"
  >
  <div class="my-account-nav">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <i class="fas fa-user fa-fw"></i>
      <span class="hidden-sm-down text-navigation-bar logout" rel="nofollow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <i class="material-icons icons-navigation-bar">&#xe5c5</i>

      <div class="dropdown-content" id="loginDropdown">
        
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
">
          <i class="fas fa-sign-out-alt fa-fw"></i>
          Wyloguj się
        </a>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">Moje konto</a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>1),$_smarty_tpl ) );?>
">Zamówienia</a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>11),$_smarty_tpl ) );?>
">Książka adresowa</a>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>10),$_smarty_tpl ) );?>
">Zmiana hasła</a>
      </div>
    <?php } else { ?>
      <div class="my-account-nav">
        <i class="fas fa-user fa-fw"></i>
        <span class="hidden-sm-down text-navigation-bar" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Moje konto','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        <i class="material-icons icons-navigation-bar">&#xe5c5</i>
        
        <div class="dropdown-content" id="loginDropdown">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="fas fa-sign-in-alt fa-fw"></i>
            Zaloguj się
          </a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="fas fa-fw fa-pencil-alt"></i>
            Zarejestruj się
          </a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">Moje konto</a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">Zamówienia</a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">Książka adresowa</a>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
">Zmiana hasła</a>
        </div>
      </div>
    <?php }?>
    </a>
  </div>
</div>
<?php }
}
