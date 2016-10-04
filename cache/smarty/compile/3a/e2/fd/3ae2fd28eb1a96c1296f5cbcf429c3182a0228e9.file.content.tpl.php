<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 09:54:09
         compiled from "C:\xampp\htdocs\tiendas_informatica\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1796557f360215af5c5-37149246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae2fd28eb1a96c1296f5cbcf429c3182a0228e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendas_informatica\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1473167112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796557f360215af5c5-37149246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f360215b30f8_17732228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f360215b30f8_17732228')) {function content_57f360215b30f8_17732228($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
