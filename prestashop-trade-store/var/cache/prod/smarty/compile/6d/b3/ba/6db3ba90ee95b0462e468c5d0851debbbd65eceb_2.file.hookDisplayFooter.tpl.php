<?php
/* Smarty version 3.1.33, created on 2019-12-28 08:52:51
  from '/home/u530738421/domains/trade-store.com.ar/public_html/themes/classic/modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0717e390ccd4_36072110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db3ba90ee95b0462e468c5d0851debbbd65eceb' => 
    array (
      0 => '/home/u530738421/domains/trade-store.com.ar/public_html/themes/classic/modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0717e390ccd4_36072110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-2 links wrapper">
  <h3 class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_eu_about_us_list" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="collapse" id="footer_eu_about_us_list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_links']->value, 'cms_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cms_link']->value) {
?>
      <li>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="cms-page-link" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cms_link']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
 </a>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }
}
