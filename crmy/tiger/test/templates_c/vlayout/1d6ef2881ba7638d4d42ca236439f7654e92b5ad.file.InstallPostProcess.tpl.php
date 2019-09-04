<?php /* Smarty version Smarty-3.1.7, created on 2015-06-12 19:02:49
         compiled from "/home/goliat1w/domains/agoliat.pl/public_html/crmy/tiger/includes/runtime/../../layouts/vlayout/modules/Install/InstallPostProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977750482557b1ec9ecf267-53582032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6ef2881ba7638d4d42ca236439f7654e92b5ad' => 
    array (
      0 => '/home/goliat1w/domains/agoliat.pl/public_html/crmy/tiger/includes/runtime/../../layouts/vlayout/modules/Install/InstallPostProcess.tpl',
      1 => 1434010498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1977750482557b1ec9ecf267-53582032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VTIGER_VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_557b1eca13237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557b1eca13237')) {function content_557b1eca13237($_smarty_tpl) {?>
<br>
<center>
	<footer class="noprint">
		<div class="vtFooter">
			<p>
				<?php echo vtranslate('POWEREDBY');?>
 <?php echo $_smarty_tpl->tpl_vars['VTIGER_VERSION']->value;?>
 &nbsp;
				&copy; 2004 - <?php echo date('Y');?>
&nbsp&nbsp;
				<a href="//www.vtiger.com" target="_blank">vtiger.com</a>
				&nbsp;|&nbsp;
				<a href="#" onclick="window.open('copyright.html','copyright', 'height=115,width=575').moveTo(210,620)"><?php echo vtranslate('LBL_READ_LICENSE');?>
</a>
				&nbsp;|&nbsp;
				<a href="https://www.vtiger.com/privacy-policy" target="_blank"><?php echo vtranslate('LBL_PRIVACY_POLICY');?>
</a>
			</p>
		</div>
	</footer>
</center>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>