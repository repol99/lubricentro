<?php
/* Smarty version 3.1.32, created on 2018-10-08 18:36:16
  from 'D:\xampp\htdocs\lubricentro\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbbcdd0b260a3_45570761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439700dac864a6aba9ecf9ccc86c455671ac2213' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lubricentro\\themes\\classic\\templates\\page.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbbcdd0b260a3_45570761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4106440665bbbcdd0ad0bb4_63222060', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14165420735bbbcdd0ad1972_27562525 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_523967305bbbcdd0ad10a9_50723442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14165420735bbbcdd0ad1972_27562525', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17071526165bbbcdd0b241e1_03475180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8395197835bbbcdd0b24830_88478876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16922134465bbbcdd0b23c19_20772271 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17071526165bbbcdd0b241e1_03475180', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8395197835bbbcdd0b24830_88478876', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7037489385bbbcdd0b255a8_74391100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3470473675bbbcdd0b25186_54472685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7037489385bbbcdd0b255a8_74391100', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4106440665bbbcdd0ad0bb4_63222060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4106440665bbbcdd0ad0bb4_63222060',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_523967305bbbcdd0ad10a9_50723442',
  ),
  'page_title' => 
  array (
    0 => 'Block_14165420735bbbcdd0ad1972_27562525',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16922134465bbbcdd0b23c19_20772271',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17071526165bbbcdd0b241e1_03475180',
  ),
  'page_content' => 
  array (
    0 => 'Block_8395197835bbbcdd0b24830_88478876',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3470473675bbbcdd0b25186_54472685',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7037489385bbbcdd0b255a8_74391100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523967305bbbcdd0ad10a9_50723442', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16922134465bbbcdd0b23c19_20772271', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3470473675bbbcdd0b25186_54472685', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
