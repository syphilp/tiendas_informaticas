<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 10:02:42
         compiled from "C:\xampp\htdocs\tiendas_informatica\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:982957f362220cef85-46977964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9e651af2c6e92b3c56acd95a2495f4cb74fdd0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendas_informatica\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1473167116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982957f362220cef85-46977964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f362220d5fc3_27807520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f362220d5fc3_27807520')) {function content_57f362220d5fc3_27807520($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
