<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 10:03:30
         compiled from "C:\xampp\htdocs\tiendas_informatica\admin747bgcrg5\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1811357f362523e9e96-98111287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52fed6756accc3b561bea5f1ecbf6e8525e13d2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendas_informatica\\admin747bgcrg5\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1473167112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1811357f362523e9e96-98111287',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f362523ec1f7_07999814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f362523ec1f7_07999814')) {function content_57f362523ec1f7_07999814($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
