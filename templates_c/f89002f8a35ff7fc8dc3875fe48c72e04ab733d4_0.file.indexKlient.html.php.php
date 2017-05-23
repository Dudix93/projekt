<?php
/* Smarty version 3.1.31, created on 2017-05-21 15:52:43
  from "E:\xampp\htdocs\PZ\templates\indexKlient.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59219bab443641_63397877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f89002f8a35ff7fc8dc3875fe48c72e04ab733d4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\PZ\\templates\\indexKlient.html.php',
      1 => 1492624343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_59219bab443641_63397877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="page-header">
	<h2>Lista Klientów</h2>
</div>


<div class="container">
<h1>Dodaj Klienta</h1>
<!-- dyrektywa ng-app definiuje aplikację AngularJS -->
<!-- dyrektywa ng-controller określa kontroler dla tego elemntu HTML -->


<!-- formularz dodawania nowej kategorii -->
<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#btnDodajKlienta" aria-expanded="false" aria-controls="btnDodajKlienta">
  Dodaj nowego klienta
</button>
<div class="collapse" id="btnDodajKlienta">
	<form class="form" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/insert" method="POST">
	<div class="form-group">
	    <label for="imie">Imie:</label>
	    <input
	           type="text"
	           class="form-control"
	           placeholder="Imie"
						 id="imie"
						 name="imie"
	           required>
	</div>

	  <div class="form-group">
	    <label for="nazwisko">Nazwisko:</label>
			<input
	           type="text"
	           class="form-control"
	           placeholder="Nazwisko"
						 id="nazwisko"
						 name="nazwisko"
	           required>
	 </div>

	<div class="form-group">
	 <label for="NIP">NIP:</label>
	 <input
					 type="number"
					 class="form-control"
					 placeholder="NIP"
					 id="NIP"
					 name="NIP"
	         required>
	 </div>



	<div class="form-group">
	 <label for="Miasto">Miasto:</label>
	 <input
					 type="text"
					 class="form-control"
					 placeholder="Miasto"
					 id="Miasto"
					 name="Miasto"
					 required>
	</div>

	<div class="form-group">
	 <label for="Ulica">Ulica:</label>
	 <input
					 type="text"
					 class="form-control"
					 placeholder="Ulica"
					 id="Ulica"
					 name="Ulica"
					 required>
	</div>

	<div class="form-group">
	 <label for="Dom">Nr domu:</label>
	 <input
					 type="number"
					 class="form-control"
					 placeholder="Nr domu"
					 id="Dom"
					 name="Dom"
					 required>
	</div>

	<div class="form-group">
	 <label for="Lokal">Nr lokalu:</label>
	 <input
					 type="number"
					 class="form-control"
					 placeholder="Nr lokalu"
					 name="Lokal"
					 id="Lokal">
	</div>

	<div class="form-group">
	 <label for="KodPocztowy">Kod Pocztowy:</label>
	 <input
					 type="text"

					 class="form-control"
					 placeholder="62-800"
					 name="KodPocztowy"
					 id="KodPocztowy"
					 required>
	</div>
	<div class="form-group">
	 <label for="Poczta">Poczta:</label>
	 <input
					 type="text"
					 class="form-control"
					 placeholder="Poczta"
					 name="Poczta"
					 id="Poczta"
					 required>
	</div>
	<div class="form-group">
	 <label for="Email">Email:</label>
	 <input
					 type="text"
					 class="form-control"
					 placeholder="firma@firma.com"
					 name="Email"
					 id="Email"
					 required>
	</div>
	<div class="form-group">
	    <span class="form-group-btn">
	    <button type="submit" class="btn btn-success"  >dodaj</button>
	    </span>
	</div>
	</form>
</div>
<!-- tabela z kategoriami -->
<!-- dyrektywa ng-init inicjalizuje tabele -->
<table class="table table-striped">
  <thead>
  <tr>

		<th>Dane osobowe</th>
		<th>NIP</th>
		<th>Adres</th>
		<th>Poczta</th>
		<th>Email</th>
		<th>Edytuj</th>
  </tr>
  </thead>
  <tbody>
		<?php if (isset($_smarty_tpl->tpl_vars['tablicaKlienci']->value)) {?>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablicaKlienci']->value, 'klient');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['klient']->value) {
?>
				<tr>

					<td><?php echo $_smarty_tpl->tpl_vars['klient']->value['Imie'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['klient']->value['Nazwisko'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['klient']->value['NIP'];?>
</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['klient']->value['KodPocztowy'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['klient']->value['Miasto'];?>
&nbsp;ul.<?php echo $_smarty_tpl->tpl_vars['klient']->value['Ulica'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['klient']->value['Dom'];?>

							<?php if ($_smarty_tpl->tpl_vars['klient']->value['Lokal'] != null || $_smarty_tpl->tpl_vars['klient']->value['Lokal'] != '') {?>
								/<?php echo $_smarty_tpl->tpl_vars['klient']->value['Lokal'];?>

							<?php }?>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['klient']->value['Poczta'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['klient']->value['EMail'];?>
</td>
						<td>
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['klient']->value['IdKlient'];?>
">Edytuj</button>
			        </div>

							<div id="myModal<?php echo $_smarty_tpl->tpl_vars['klient']->value['IdKlient'];?>
" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Edycja</h4>
										</div>
										<div class="modal-body">
											<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/update" method="POST" method="POST">
												<div class="form-group">

													<div class="form-group" style="display:none;">
													    <label for="id">Id:</label>
													    <input
													           type="text"
													           class="form-control"
													           placeholder="Imie"
																		 id="id"
																		 name="id"
													           required
																		 readonly="readonly"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['IdKlient'];?>
"
																		 >
													</div>
													<div class="form-group">
													    <label for="imie">Imie:</label>
													    <input
													           type="text"
													           class="form-control"
													           placeholder="Imie"
																		 id="imie"
																		 name="imie"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['Imie'];?>
"
													           required>
													</div>

														 <div class="form-group">
														    <label for="nazwisko">Nazwisko:</label>
																<input
														           type="text"
														           class="form-control"
														           placeholder="Nazwisko"
																			 id="nazwisko"
																			 name="nazwisko"
																			 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['Nazwisko'];?>
"
														           required>
														 </div>

														<div class="form-group">
														 <label for="NIP">NIP:</label>
														 <input
																		 type="number"
																		 class="form-control"
																		 placeholder="NIP"
																		 id="NIP"
																		 name="NIP"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['NIP'];?>
"
														          required>
														 </div>



														<div class="form-group">
														 <label for="Miasto">Miasto:</label>
														 <input
																		 type="text"
																		 class="form-control"
																		 placeholder="Miasto"
																		 id="Miasto"
																		 name="Miasto"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['Miasto'];?>
"
																		 required>
														</div>

														<div class="form-group">
														 <label for="Ulica">Ulica:</label>
														 <input
																		 type="text"
																		 class="form-control"
																		 placeholder="Ulica"
																		 id="Ulica"
																		 name="Ulica"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['Ulica'];?>
"
																		 required>
														</div>

														<div class="form-group">
														 <label for="Dom">Nr domu:</label>
														 <input
																		 type="number"
																		 class="form-control"
																		 placeholder="Nr domu"
																		 id="Dom"
																		 name="Dom"
																		 value=<?php echo $_smarty_tpl->tpl_vars['klient']->value['Dom'];?>

																		 required>
														</div>

														<div class="form-group">
														 <label for="Lokal">Nr lokalu:</label>
														 <input
																		 type="number"
																		 class="form-control"
																		 placeholder="Nr lokalu"
																		 name="Lokal"
																		 id="Lokal"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['Lokal'];?>
"
																		 >
														</div>

														 <div class="form-group">
														 <label for="KodPocztowy">Kod Pocztowy:</label>
														 <input
																		 type="text"

																		 class="form-control"
																		 placeholder="62-800"
																		 name="KodPocztowy"
																		 id="KodPocztowy"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['KodPocztowy'];?>
"
																		 required>
														</div>
														 <div class="form-group">
														 <label for="Poczta">Poczta:</label>
														 <input
																		 type="text"
																		 class="form-control"
																		 placeholder="Poczta"
																		 name="Poczta"
																		 id="Poczta"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['Poczta'];?>
"
																		 required>
														</div>

														 <div class="form-group">
														 <label for="Email">Email:</label>
														 <input
																		 type="text"
																		 class="form-control"
																		 placeholder="firma@firma.com"
																		 name="Email"
																		 id="Email"
																		 value="<?php echo $_smarty_tpl->tpl_vars['klient']->value['EMail'];?>
"
																		 required>
														</div>

												</div>
												<input type="submit" value="Zmień" class="btn btn-primary" />
												<button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		<?php }?>
  </tbody>
</table>




</div>


<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}