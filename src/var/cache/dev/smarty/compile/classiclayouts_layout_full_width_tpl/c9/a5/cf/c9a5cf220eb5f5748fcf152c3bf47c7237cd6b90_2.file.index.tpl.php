<?php
/* Smarty version 3.1.48, created on 2024-11-23 22:45:55
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67424d1339ad35_73263385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a5cf220eb5f5748fcf152c3bf47c7237cd6b90' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1702485415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67424d1339ad35_73263385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153713172867424d13399866_15651185', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_208906587567424d13399b46_31787022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_110220526067424d1339a239_41552124 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_13511168067424d13399fd2_07615838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110220526067424d1339a239_41552124', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_153713172867424d13399866_15651185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_153713172867424d13399866_15651185',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_208906587567424d13399b46_31787022',
  ),
  'page_content' => 
  array (
    0 => 'Block_13511168067424d13399fd2_07615838',
  ),
  'hook_home' => 
  array (
    0 => 'Block_110220526067424d1339a239_41552124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208906587567424d13399b46_31787022', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13511168067424d13399fd2_07615838', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
