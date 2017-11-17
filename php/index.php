<!DOCTYPE html>
<html>
<head>
	<!-- Conexão com CSS -->
	<link rel="stylesheet" type="text/css" href="../css/FolhaDeEstilo.css" >
	<!-- Fim da conexão com CSS -->

	<!-- Conexão com JavaScript -->
	<script src="../JavaScript/funcoes.js">
	</script>
	<!-- Fim da conexão com JavaScript-->

	<!-- Titulo da pagina -->
	<title>Estudio Noma</title>
	<!-- Fim do titulo da pagina -->

	<!-- conexão com bootstrap -->
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- fim da conexão com bootstrap -->
  	
	<script>
		// Garante que a pagina ja carregou completamente antes de executar
		$(document).ready(function(){ 
				// Seleciona todos os links dentro do menu
				var ativador = $('#nav ul li a');

				// Seleciona onde o conteudo vai ser inserido
				var area_conteudo = $('#conteudo');

				// Quando algum dos links selecionados for clicado...
				ativador.on('click', function(){

					//Remove a classe 'active' da pagina que estava ativa
					$('#nav-menu li.active').removeClass('active');

					// Recebe o valor que se encontra no data do link
					var target = $(this).data('target');

					// Adiciona a classe 'active' ao link em atividade
					$(this).parent().addClass('active');

					// Adiciona o conteudo na parte selecionada anteriormente
					area_conteudo.load(target + '.php');
				});

		}); 
	</script> 
	

</head>
<body>

	<!-- BANNER -->
	<header class="banner">
		
	</header>
	<!--FIM DO BANNER -->

	<!-- MENU -->
	<nav class="navbar navbar-inverse" id="nav">
		<div class="container-fluid">
  		  	<div class="navbar-header">
      			<a class="navbar-brand" href="index.php">Estudio Noma</a>
   		  	</div>
			<ul class="nav navbar-nav" id="nav-menu">
				<!--<li class="active"><a href="#" data-target="home">Home</a> -->

				<li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cliente <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" data-target="clientes_cadastro">Cadastrar Cliente</a></li>
						<li><a href="#" data-target="clientes_pesquisar">Pesquisar Cliente</a></li>
					</ul>
				</li>

				<li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Funcionario <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" data-target="funcionarios_cadastro">Cadastrar Funcionario</a></li>
						<li><a href="#" data-target="funcionarios_pesquisar">Pesquisar Funcionario</a></li>
					</ul>
				</li>

				<li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Estoque <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#" data-target="produtos_cadastro">Cadastrar Produto</a></li>
						<li><a href="#" data-target="produtos_pesquisar">Pesquisar Produto</a></li>
					</ul>
				</li>

				
				<li ><a href="#" data-target="financeiro">Financeiro</a></li>

				<li ><a href="#" data-target="agenda">Agenda</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
      			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    		</ul>
    	</div>
	</nav>
	<!--FIM DO MENU -->

	<!-- CONTEUDO -->
	<div class="conteudo" id="conteudo">
		<?php include('home.php');  ?>
	</div>
	<!-- FIM DO CONTEUDO -->

	<!-- FOOTER -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				
			</div>
			<div class="bottom-footer">
				<div class="col-md-5">© Copyright OPE 2017.</div>
				<div class="col-md-7">
					<ul class="footer-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Contatos</a></li>
				</div>
			</div>
		</div>
	</footer>
	<!--FIM DO FOOTER -->

	<script>
		
	</script>

</body>
</html>