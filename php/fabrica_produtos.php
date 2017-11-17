<meta charset="utf-8">

<?php

include('produto_classe.php');

if(!empty($_POST['produto'])){
	
	$produto = new Produto($_POST['produto'],$_POST['custo'],$_POST['valorVenda']);

	if($produto->salvar()){
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