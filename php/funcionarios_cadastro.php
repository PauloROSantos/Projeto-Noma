<div class="container">
	<form method="post" action="fabrica_funcionarios.php">
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
			<div class="form-group col-md-6">
				<label for="inputCpf">CPF</label>
				<input type="value" class="form-control" id="inputCpf" placeholder="456.987.456-04" name="cpf">
			</div>
			<div class="form-group col-md-6">
				<label for="inputBanco">Banco</label>
				<input type="text" class="form-control" id="inputBanco" placeholder="Bradesco" name="banco">
			</div>
			<div class="form-group col-md-6">
				<label for="inputContaCorrente">Conta Corrente</label>
				<input type="value" class="form-control" id="inputContaCorrente" placeholder="Bradesco" name="contaCorrente">
			</div>
			<div class="form-group col-md-6">
				<label for="inputFuncao">Função</label>
				<input type="text" class="form-control" id="inputFuncao" placeholder="Bradesco" name="funcao">
			</div>



			<div class="row">
				<legend class="col-form-legend col-sm-2">Sexo</legend>
				
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
						Homem
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
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