<?php
/* Smarty version 3.1.33, created on 2019-12-29 07:47:23
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e085a0b0f0b33_45977605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1574688556,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5e085a0b0f0b33_45977605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://trade-store.com.ar/index.php?controller=my-account" rel="nofollow">
      A túa conta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">A túa conta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://trade-store.com.ar/index.php?controller=identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="http://trade-store.com.ar/index.php?controller=history" title="Encomendas" rel="nofollow">
            Encomendas
          </a>
        </li>
            <li>
          <a href="http://trade-store.com.ar/index.php?controller=order-slip" title="Abonos" rel="nofollow">
            Abonos
          </a>
        </li>
            <li>
          <a href="http://trade-store.com.ar/index.php?controller=addresses" title="Enderezos" rel="nofollow">
            Enderezos
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
