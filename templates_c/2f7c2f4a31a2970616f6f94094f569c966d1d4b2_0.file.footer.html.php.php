<?php
/* Smarty version 3.1.31, created on 2017-04-09 17:25:48
  from "C:\xampp\htdocs\PZ\templates\footer.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58ea527cead5a4_10954398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f7c2f4a31a2970616f6f94094f569c966d1d4b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PZ\\templates\\footer.html.php',
      1 => 1490647715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea527cead5a4_10954398 (Smarty_Internal_Template $_smarty_tpl) {
?>
      </div>
    </div>
  </div>
</body>
<div class="panel-footer">
    <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/search_autocomplete.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.cookie.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <p class="text-muted">
    Hurtownia SZPUNAR - Projekt zespołowy 2017
    </p>
</div>
</html>
<?php }
}