<?php
/* Smarty version 3.1.33, created on 2019-12-28 10:08:33
  from '/home/u530738421/domains/trade-store.com.ar/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0729a12a41b6_18250055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a9544fd4d26faf80d298bf027e8dd9d7cf44c9' => 
    array (
      0 => '/home/u530738421/domains/trade-store.com.ar/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl',
      1 => 1537345471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0729a12a41b6_18250055 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['directPrint']->value) {?>
	<input type="submit" name="printCMSPage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
" class="btn btn-secondary" onclick="window.print()" />
<?php } else { ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['print_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a>
<?php }
}
}
