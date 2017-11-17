<?php

include('funcoes.php');

Class Funcionario {
	private $nome = "";
	private $telefone = "";
	private $banco = "";
	private $funcao = "";
	private $email = "";
	private $cpf = 0;
	private $contaCorrente = 0;
	private $sexo = "";

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}	
	public function getTelefone() {
		return $this->telefone;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}	
	public function getBanco() {
		return $this->banco;
	}
	public function setBanco($banco){
		$this->banco = $banco;
	}	
	public function getFuncao() {
		return $this->funcao;
	}
	public function setFuncao($funcao){
		$this->funcao = $funcao;
	}	
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}	
	public function getCpf() {
		return $this->cpf;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}	
	public function getContaCorrente() {
		return $this->contaCorrente;
	}
	public function setContaCorrente($contaCorrente){
		$this->contaCorrente = $contaCorrente;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	public function __construct($nome,$telefone,$banco,$funcao,$email,$cpf,$contaCorrente,$sexo){
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->banco = $banco;
		$this->funcao = $funcao;
		$this->email = $email;
		$this->cpf = $cpf;
		$this->contaCorrente = $contaCorrente;
		$this->sexo = $sexo;
	}

	public function salvar(){
		conectaSQL();

		$coluna = array("NOME","TELEFONE","BANCO","FUNCAO","EMAIL","CPF","CONTACORRENTE","SEXO");
		$valores = array($this->nome,$this->telefone,$this->banco,$this->funcao,$this->email,$this->cpf,$this->contaCorrente,$this->sexo);

		inserirSQL($coluna,$valores,"TB_FUNCIONARIO");

		fechaSQL(conectaSQL());
		return true;
	}

}