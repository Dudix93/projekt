<?php
/* Smarty version 3.1.31, created on 2017-05-23 16:39:14
  from "/opt/lampp/htdocs/PZ/templates/searchTowary.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59244992ac9b67_34119068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '265f96da7f6467633608b047372b04013e5ad572' => 
    array (
      0 => '/opt/lampp/htdocs/PZ/templates/searchTowary.html.php',
      1 => 1491922911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_59244992ac9b67_34119068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-header">
	<h2>Lista Towarów</h2>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['tablicaTowarow']->value) && !empty($_smarty_tpl->tpl_vars['tablicaTowarow']->value)) {?>
<table class="table">
  <thead>
    <tr>
      <th>Nazwa Towaru</th><th>Stan Magazynowy Dysponowany</th><th>Stawka Vat</th><th>Kod Towaru</th><th>W sprzedaży</th><th>Akcja</th>
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablicaTowarow']->value, 'towar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['towar']->value) {
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['towar']->value['NazwaTowaru'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['towar']->value['StanMagazynowyDysponowany'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['towar']->value['StawkaVat'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['towar']->value['KodTowaru'];?>
</td>
		<td><?php $_prefixVariable1 = 1;
$_tmp_array = isset($_smarty_tpl->tpl_vars['towar']) ? $_smarty_tpl->tpl_vars['towar']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['Freeze'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('towar', $_tmp_array);
if ($_prefixVariable1) {?> Nie <?php } else { ?> Tak <?php }?></td>
    <td>

          <div class="btn-group" role="group">
						<a type="button" class="btn btn-primary" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Towar/edit/<?php echo $_smarty_tpl->tpl_vars['towar']->value['IdTowar'];?>
" role="button">Edytuj</a>
						<a type="button" class="btn btn-warning" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Towar/zamroz/<?php echo $_smarty_tpl->tpl_vars['towar']->value['IdTowar'];?>
" role="button">Zamroź</a>
	</td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</table>
<?php }
if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
