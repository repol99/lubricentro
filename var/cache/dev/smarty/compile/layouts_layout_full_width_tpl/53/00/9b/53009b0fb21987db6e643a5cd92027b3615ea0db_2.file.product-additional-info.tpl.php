<?php
/* Smarty version 3.1.32, created on 2018-09-27 22:55:59
  from 'D:\xampp\htdocs\lubricentro\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bad8a2f51b872_49045020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53009b0fb21987db6e643a5cd92027b3615ea0db' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lubricentro\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bad8a2f51b872_49045020 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
