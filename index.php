<!-- Ps do vidro
	 Fevereiro de 2018
	 Sistema de Avaliação de instaladores
	 Criado por: João Paulo Gonçalves Queiroz
	 Data-inicio: 19 de fevereiro 2018
	 Email: joaopaulo.queiroz.545@gmail.com
	-->
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Ps do vidro-Avaliação</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/js.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<div class="container">
			<br><br><br><br><br> 
			<center>
				<div>
					<img src="img/logo.png" width="150px">
				</div>
			</center>
			<br> <br>
			<center>
				<div class="per" id="perguntas"></div>
			</center>
			<div class="estrelas" id="fields">
				<!-- Fields js -->
			</div>
			<center>
				<br> 
				<button id="bt" class="bt btns btn">AVALIAR AGORA</button>

			</center>
			<form method="POST" action="classes/index.php" enctype="multipart/form-data" id="forms">

				<input type="hidden" id="p1" name="pergunta1" value="">
				<input type="hidden" id="p2" name="pergunta2" value="">
				<input type="hidden" id="p3" name="pergunta3" value="">
				<input type="hidden" id="p4" name="pergunta4" value="">
				<input type="hidden" id="p5" name="pergunta5" value="">
				<input type="hidden" id="np" name="npedido" value="<?php echo $_GET['pedido'] ?>">
				<center>

				<textarea class="tx" id="area" name="pergunta6"></textarea>
				<br><br>
				</center>
				<center>
					<input class="btn" type="submit" id="vai" name="enviar" value="ENVIAR">
				</center>
					<br><br>
			</form>
		</div>
	</body>
	</html>