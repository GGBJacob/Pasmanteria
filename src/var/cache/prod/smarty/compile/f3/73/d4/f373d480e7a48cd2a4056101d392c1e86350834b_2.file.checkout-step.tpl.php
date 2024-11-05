<?php
/* Smarty version 3.1.48, created on 2024-11-05 17:58:38
  from '/var/www/html/themes/classic/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_672a4ebe8e6bb5_05570432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f373d480e7a48cd2a4056101d392c1e86350834b' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672a4ebe8e6bb5_05570432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113582754672a4ebe8e5199_53517390', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_144942170672a4ebe8e6632_75269138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_113582754672a4ebe8e5199_53517390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_113582754672a4ebe8e5199_53517390',
  ),
  'step_content' => 
  array (
    0 => 'Block_144942170672a4ebe8e6632_75269138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title js-step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </h1>

    <div class="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144942170672a4ebe8e6632_75269138', 'step_content', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
