<?php
/* Smarty version 3.1.32, created on 2018-09-10 18:49:11
  from 'D:\xampp\htdocs\lubricentro\admin693fllnfl\themes\default\template\controllers\themes_catalog\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96e6d7795557_20758469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f4ba0d6d84ffb228e8b0f9432bcf9c3663cbf5e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\lubricentro\\admin693fllnfl\\themes\\default\\template\\controllers\\themes_catalog\\content.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96e6d7795557_20758469 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }
}
}