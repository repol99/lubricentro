<?php
/* Smarty version 3.1.32, created on 2018-09-10 19:07:23
  from 'D:\xampp\htdocs\lubricentro\admin693fllnfl\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96eb1b957589_01615854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f5f99cca408b4cc1dffad072267b4e908d8d20' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lubricentro\\admin693fllnfl\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96eb1b957589_01615854 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
