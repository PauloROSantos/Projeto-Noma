<?php

function conectaSQL($banco="Noma",$usuario="root",$senha="",$hostname="localhost"){

	$connect = mysql_connect($hostname,$usuario,$senha);

	if(!$connect){
		die(trigger_error("Não foi possivel conectar"));
		return false;
	}else{
		$db = mysql_select_db($banco, $connect);
		if(!$db){
			die(trigger_error("Não foi possivel conectar"));
			return false;
		}else{
			return $connect;
		}
	}
}



function fechaSQL($connect){
	$fecha = mysql_close($connect);

	if(!$fecha){
		echo "Não foi possivel fechar conexão";
		return false;
	}else{
		return true;
	}
}	

function inserirSQL($coluna,$valor,$tabela){

	if((is_array($coluna)) and (is_array($valor))){

		if(count($coluna) == count($valor)){

			$inserir = "INSERT INTO {$tabela} (".implode(', ',$coluna).") VALUES ('".implode('\', \'',$valor)."')";
		}else{
			return false;
		}
	}else{

		$inserir = " INSERT INTO {$tabela} ({$coluna}) VALUES ('{$valor}')";
	}

	if ($conexao = conectaSQL()){

		if(mysql_query($inserir,$conexao)){
			fechaSQL($conexao);
			return true;
		}else{
			echo "query invalida";
			return false;
		}
	}else{
		return false;
	}
}

function selectSQL($tabela,$coluna="*",$where=NULL,$ordem=NULL,$limite=NULL){

	$sql = "SELECT {$coluna} FROM {$tabela} {$where} {$ordem} {$limite}";

	if ($conexao = conectaSQL()){

		if($query = mysql_query($sql,$conexao)){

			if(mysql_num_rows($query) > 0){

				$resultados_totais = array();

				while($resultado = mysql_fetch_assoc($query)){
					$resultados_totais[] = $resultado;
				}

				fechaSQL($conexao);

				return $resultados_totais;
			}
		}else{
			return false;
		}
	}else{
		return false;
	}
}

?>