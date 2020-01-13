<?php
/* Smarty version 3.1.33, created on 2019-12-28 19:00:51
  from '/home/u530738421/domains/trade-store.com.ar/public_html/admineg8rwyew09fpkrcw/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e07a6638c18f6_02256763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ebba7bd267ec03369a44eaacfb461e3d50140aa' => 
    array (
      0 => '/home/u530738421/domains/trade-store.com.ar/public_html/admineg8rwyew09fpkrcw/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1574688556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e07a6638c18f6_02256763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15097865825e07a6638c0524_88445839', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_15097865825e07a6638c0524_88445839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_15097865825e07a6638c0524_88445839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
