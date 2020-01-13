<?php
/* Smarty version 3.1.33, created on 2019-12-28 09:02:00
  from '/home/u530738421/domains/trade-store.com.ar/public_html/admineg8rwyew09fpkrcw/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e071a08681be0_97270710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbc5a319b421c9385db9abddd97a9f29d9ccb709' => 
    array (
      0 => '/home/u530738421/domains/trade-store.com.ar/public_html/admineg8rwyew09fpkrcw/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e071a08681be0_97270710 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
