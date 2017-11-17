<meta charset="utf-8">

<?php

include('cliente_classe.php');

if(!empty($_POST['nome'])){
	$cliente = new Cliente($_POST['nome'],$_POST['telefone'],$_POST['email'],$_POST['gridRadios']);

	if($cliente->salvar()){
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