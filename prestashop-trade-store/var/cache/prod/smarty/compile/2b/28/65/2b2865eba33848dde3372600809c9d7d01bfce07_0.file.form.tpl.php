<?php
/* Smarty version 3.1.33, created on 2019-12-28 19:05:57
  from '/home/u530738421/domains/trade-store.com.ar/public_html/admineg8rwyew09fpkrcw/themes/default/template/controllers/features/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e07a7956da294_67166419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b2865eba33848dde3372600809c9d7d01bfce07' => 
    array (
      0 => '/home/u530738421/domains/trade-store.com.ar/public_html/admineg8rwyew09fpkrcw/themes/default/template/controllers/features/helpers/form/form.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e07a7956da294_67166419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20643332745e07a7956d5ca4_40337652', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_20643332745e07a7956d5ca4_40337652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_20643332745e07a7956d5ca4_40337652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureForm",'id_feature'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
