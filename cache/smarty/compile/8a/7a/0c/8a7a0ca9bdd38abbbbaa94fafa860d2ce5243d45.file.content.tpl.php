<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 09:53:45
         compiled from "C:\xampp\htdocs\tiendas_informatica\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1398357f3600983c387-92391684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7a0ca9bdd38abbbbaa94fafa860d2ce5243d45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendas_informatica\\admin\\themes\\default\\template\\content.tpl',
      1 => 1473167112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1398357f3600983c387-92391684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f360098ab608_30033061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f360098ab608_30033061')) {function content_57f360098ab608_30033061($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
