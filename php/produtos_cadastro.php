<div class="container">
	<form method="post" action="fabrica_produtos.php">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputProduto">Produto</label>
				<input type="text" class="form-control" id="inputProduto" placeholder="Nome" name="produto">
			</div>
			<div class="form-group col-md-6">
				<label for="inputCustoProduto">Custo</label>
				<input type="value" class="form-control" id="inputCustoProduto" placeholder="R$ 1,99" name="custo">
			</div>
			<div class="form-group col-md-6">
				<label for="inputValorVenda">Valor Venda</label>
				<input type="text" class="form-control" id="inputValorVenda" placeholder="R$ 1,99" name="valorVenda">
			</div>
			<div class="text-right">
					<button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
					<br/>
			</div>
		</div>
	</form>
</div>