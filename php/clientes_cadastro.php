<div class="container">
	<form method="post" action="fabrica_clientes.php">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputNome">Nome</label>
				<input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail">E-mail</label>
				<input type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="email">
			</div>
			<div class="form-group col-md-6">
				<label for="inputTelefone">Telefone</label>
				<input type="text" class="form-control" id="inputTelefone" placeholder="9 9999-9999" name="telefone">
			</div>
			<div class="row">
				<legend class="col-form-legend col-sm-2">Sexo</legend>
				
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="gridRadios" id="gridRadiosHomem" value="Homem" checked>
						Homem
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="gridRadios" id="gridRadiosMulher" value="Mulher">
						Mulher
					</label>
				</div>
			</div>
			<div class="text-right">
					<button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
					<br/>
			</div>
		</div>
	</form>
</div>