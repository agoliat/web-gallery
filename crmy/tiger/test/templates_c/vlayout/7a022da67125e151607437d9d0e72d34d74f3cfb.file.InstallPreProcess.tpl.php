<?php /* Smarty version Smarty-3.1.7, created on 2015-06-12 19:02:49
         compiled from "/home/goliat1w/domains/agoliat.pl/public_html/crmy/tiger/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:530185364557b1ec9e4e195-80123307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a022da67125e151607437d9d0e72d34d74f3cfb' => 
    array (
      0 => '/home/goliat1w/domains/agoliat.pl/public_html/crmy/tiger/includes/runtime/../../layouts/vlayout/modules/Install/InstallPreProcess.tpl',
      1 => 1434010498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '530185364557b1ec9e4e195-80123307',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_557b1ec9e56b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b1ec9e56b6')) {function content_557b1ec9e56b6($_smarty_tpl) {?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row-fluid">
		<div class="span6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="span6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>