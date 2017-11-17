<?php

include('funcoes.php');

Class Cliente{
	private $nome = "";
	private $telefone = "";
	private $email = "";
	private $sexo = "";

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setSexo($sexo){
		$this->email = $email;
	}
	public function getSexo(){
		return $this->sexo;
	}

	public function __construct($nome,$telefone,$email,$sexo){
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->email = $email;
		$this->sexo = $sexo;
	}

	public function salvar(){

		conectaSQL();

		$coluna = array("NOME","TELEFONE","EMAIL","SEXO");
		$valores = array($this->nome,$this->telefone,$this->email,$this->sexo);

		inserirSQL($coluna,$valores,"TB_CLIENTE");

		fechaSQL(conectaSQL()); 


		return true;
	}
}