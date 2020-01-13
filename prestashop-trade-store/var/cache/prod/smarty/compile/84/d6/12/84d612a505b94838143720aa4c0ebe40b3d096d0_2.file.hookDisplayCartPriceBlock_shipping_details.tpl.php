<?php
/* Smarty version 3.1.33, created on 2019-12-28 19:18:07
  from '/home/u530738421/domains/trade-store.com.ar/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e07aa6f254971_05817102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84d612a505b94838143720aa4c0ebe40b3d096d0' => 
    array (
      0 => '/home/u530738421/domains/trade-store.com.ar/public_html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl',
      1 => 1537345471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e07aa6f254971_05817102 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Under conditions)','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

 </a>
<?php }
}
