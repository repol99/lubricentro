<?php
/* Smarty version 3.1.32, created on 2018-09-10 19:07:23
  from 'D:\xampp\htdocs\lubricentro\admin693fllnfl\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96eb1b8b31b0_99142283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70605e8610151d43a36fd54450dd5b6814fccbc4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lubricentro\\admin693fllnfl\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96eb1b8b31b0_99142283 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
