<meta charset="utf-8">

<?php

include('funcionarios_classe.php');

if(!empty($_POST['nome'])){

	$funcionario = new Funcionario($_POST['nome'],$_POST['telefone'],$_POST['banco'],$_POST['funcao'],$_POST['email'],$_POST['cpf'],$_POST['contaCorrente'],$_POST['gridRadios']);

	if($funcionario->salvar()){
		echo "<script>
				alert('Cadastro concluido!');
				history.back();
			  </script>";
	}
}else{
	echo "<script>
			alert('Formulario não preenchido corretamente');
			history.back();
		</script>";
}