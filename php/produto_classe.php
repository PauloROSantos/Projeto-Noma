<?php

include('funcoes.php');

Class Produto {
	private $produto = "";
	private $custo = 0;
	private $valorVenda = 0;

	public function getProduto(){
		return $this->produto;
	}
	public function setProduto($produto){
		$this->produto = $produto;
	}	
	public function getCusto(){
		return $this->custo;
	}
	public function setCusto($custo){
		$this->custo = $custo;
	}	
	public function getValorVenda(){
		return $this->valorVenda;
	}
	public function setValorVenda($valorVenda){
		$this->valorVenda = $valorVenda;
	}

	public function __construct ($produto,$custo,$valorVenda) {
		$this->produto = $produto;
		$this->custo = $custo;
		$this->valorVenda = $valorVenda;
	}

	public function salvar(){
		conectaSQL();

		$coluna = array("PRODUTO","CUSTO","VALORVENDA");
		$valores = array($this->produto,$this->custo,$this->valorVenda);

		inserirSQL($coluna,$valores,"TB_PRODUTO");

		fechaSQL(conectaSQL()); 
		return true;
	}
}